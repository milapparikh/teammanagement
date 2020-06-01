<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{

    protected $table = 'userdetails';


    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'user_id', 'country_id','city_id','first_name','last_name','gender','identification','postal_code','parent_phone_email','birth_date'
    ];

   
}
