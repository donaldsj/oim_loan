<?php

namespace App\Http\Controllers;
use Auth;
class HomeController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
    	if(Auth::check()){
    		return redirect('dashboard');

    	}
        return view('auth.login');
    }
}
