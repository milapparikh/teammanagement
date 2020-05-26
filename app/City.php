<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class City extends Model
{
    protected $table = 'citys';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'country_id', 'city_name'
    ];
}
