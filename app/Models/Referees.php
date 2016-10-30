<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Referees extends Model
{



    // validation rules here
    public static $rules = [
    
        'customer_id' => 'required',
         'first_name' => 'required|max:120',
         'last_name' => 'required|max:120',
         'street_of_residence' => '',
         'region' => 'required',
         'job' => 'required',
         'work_location' => 'required',
         'phone_number' => 'required',
         'relationship' => 'required'
    ];

   /* protected $table = "customers";*/

    protected $fillable = ['customer_id', 'first_name', 'second_name', 'last_name', 'street_of_residence', 'region', 'job', 'work_location', 'phone_number', 'email', 'relationship', 'photo_url'];


}
