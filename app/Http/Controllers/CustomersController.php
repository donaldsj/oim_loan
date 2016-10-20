<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

use App\Models\Customer;

use Response;
use Validator;
use Redirect;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $user = Auth::user();
        if ($user->role_id == 1) {
            $customers = DB::table('customers')->orderBy('id','DESC')->paginate(10);
        }
        else {
            $customers = DB::table('customers')
                    ->where('employee_id', $user->id)
                    ->orderBy('customers.id','DESC')->paginate(10);
        }
        
        return view('customers.index', ['customers' => $customers, 'user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user(); 
        return view('customers.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 
       $validator = Validator::make($data = $request->all(), Customer::$rules);

       $data['dob'] = date('Y-m-d', strtotime($request->dob));
       $data['employee_id'] = $user->id;

        if ($validator->fails())
        {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        //

        if($request->hasFile('photo_url')){

            if($request->file('photo_url')->isValid()){

                $file = $request->file('photo_url');

                $name = time(). '-' .$file->getClientOriginalName();

                $file->move(public_path().'/img/customers_photo/', $name);

                $img = Image::make(public_path().'/img/customers_photo/'.$name)->resize(180, 240)->save();

        
                $data['photo_url'] = $name;
            }
        }
        $customer = Customer::create($data);
        if($customer){
            return redirect('customers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Auth::user();
/*
        $default_obj = array(['first_name'=>"None",'middle_name'=>"None",'last_name'=>"None",'photo_url'=>"None",'job'=>"None"]);
        
*/
        $attending_officers = DB::table('users as u')
                    ->join('customers as c', 'u.id', '=', 'c.employee_id' )
                    ->select('u.first_name', 'u.middle_name', 'u.last_name')
                    ->where('c.id', $id)->orderBy('u.id', 'DESC')->first();
        if (!is_null($attending_officers)) {
            $attending_officer = $attending_officers;
        }
        else {
            return "Sorry, This data is not normal";
        }

        $referee = DB::table('referees')->orderBy('id', 'DESC')->where('customer_id', $id)->first();
        if ($referee != null) {
            $referees = $referee;
        }
        else {
            $referees = $user;
        }
              
        $customer_loans = DB::table('loans')->where('customer_id', $id)->get();
                
        return view('customers.show', ['customer' => Customer::findOrFail($id), 'referees'=>$referees, 'customer_loans'=>$customer_loans, 'attending_officers'=>$attending_officer, 'user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::findOrFail($id);

        return view('customers.edit')->withCustomer($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $this->validate($request, [
           /* 'title' => 'required',
            'description' => 'required'*/
        ]);

        $input = $request->all();

        $customer->fill($input)->save();
        if ($customer) {
            Session::flash('flash_message', 'Customer successfully Updated!');
        }
        else {
            return back()->withInput();
        }
        return redirect()->route('customers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id)->delete();

        return redirect()->route('customers');
    }
}
