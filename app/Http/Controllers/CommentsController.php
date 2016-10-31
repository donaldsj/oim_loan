<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
use App\Models\Comments;

use Response;
use Validator;
use Redirect;
use Auth;
use Image;

class CommentsController extends Controller
{
    //
    public function store(Request $request){
    	$validator = Validator::make($data = $request->all(), Comments::$rules);

        if ($validator->fails())
        {
        	return Redirect::back()->withErrors($validator)->withInput();
        }
        //
        $comment = Comments::create($data);
        if($comment){
            return redirect()->route('loan.details',$request->loan);
        }
    }
}
