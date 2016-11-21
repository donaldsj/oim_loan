<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{



    // Add your validation rules here
    public static $rules = [
        'first_name' => 'required|max:120',
        'last_name' => 'required|max:120',
        'gender' => 'required|max:320',
        'dob' => 'required|max:320',
        'marital_status' => 'required',
        'job' => 'required',
        'group_id' => '',
        'street_of_residence' => 'required',
        'ward' => 'required',
        'district' => 'required',
        'region' => 'required',
        'phone_number' => 'required',
        'photo_url' => 'required|mimes:jpg,png,jpeg,bmp|max:4000'
    ];

   /* protected $table = "customers";*/

    protected $fillable = ['first_name','second_name', 'last_name', 'gender', 'dob', 'marital_status', 'job', 'group_id', 'street_of_residence', 'residence_type', 'residence_period', 'ward', 'district', 'region', 'postal_address', 'phone_number', 'email', 'photo_url', 'employee_id'];


    public function loans()
    {
        return $this->hasMany('App\Models\Loan');
    }

}
