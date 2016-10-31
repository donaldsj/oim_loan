<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Comments extends Model
{



    // validation rules here
    public static $rules = [
    
        'loan' => 'required',
        'officer' => 'required',
        'comments' => 'required'
    ];


    protected $fillable = ['loan', 'officer', 'comments'];


}
