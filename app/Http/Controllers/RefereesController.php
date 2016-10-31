<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Models\Referees;

use Response;
use Validator;
use Redirect;
use Auth;
use Image;

class RefereesController extends Controller
{



    //
    public function create($id) {
    	$user = Auth::user();
    	return view('customers.referee_create', compact('user','id'));
    }

    public function save(Request $request) {
    	//$user = Auth::user(); 
        $validator = Validator::make($data = $request->all(), Referees::$rules);

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

        $referee = Referees::create($data);
        if($referee){
            return redirect()->route('customers.show',$request->customer_id);
        }
    }
}
