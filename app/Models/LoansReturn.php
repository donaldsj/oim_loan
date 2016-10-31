<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class LoansReturn extends Model
{



    // Add your validation rules here
    public static $rules = [
    	'loan_code'		=>	'required',
         'return_date'		=> 'required',
         'return_amount'	=> 'required',
    ];

   /* protected $table = "customers";*/

    protected $fillable = ['user_id','loan_code','return_date','return_amount'];


}
