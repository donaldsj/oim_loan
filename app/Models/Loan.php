<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Loan extends Model {



    // Add your validation rules here
    public static $rules = [
         'customer_id' => 'required',
         'loan_amount' => 'required',
         'rate' => 'required',
         'loan_purpose' => 'required',
         'income_source' => 'required',
         'duration' => 'required',
    ];

   /* protected $table = "customers";*/

    protected $fillable = ['customer_id','loan_date', 'loan_amount', 'interest', 'penalty', 'loan_purpose', 'income_source', 'duration', 'balance', 'due_date'];


    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

}
