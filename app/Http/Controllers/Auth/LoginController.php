<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Handle a login request to the application
     *
     * @param  \App\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if ($lockedOut = $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return redirect('login')
                ->with('error', trans('You have too many login attempts, your account is temporarily locked!'))
                ->withInput($request->only('log'));
        }

        $logValue = $request->input('log');

        $logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';

        $credentials = [
            $logAccess  => $logValue,
            'password'  => $request->input('password'),
        ];

        if (!auth()->validate($credentials)) {
            if (!$lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            return redirect('login')
                ->with('error', trans('Incorect username or password!'))
                ->withInput($request->only('log'));
        }

        $user = auth()->getLastAttempted();

        if ($user->confirmed) {
            if (! $lockedOut) {
                $this->incrementLoginAttempts($request);
            }

            auth()->login($user, $request->has('memory'));

            if ($request->session()->has('user_id')) {
                $request->session()->forget('user_id');
            }

            return redirect('/');
        }
        
        $request->session()->put('user_id', $user->id);

        return redirect('login')->with('error', trans('front/verify.again'));
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
