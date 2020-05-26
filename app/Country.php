<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Country extends Model
{
    protected $table = 'countrys';

    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'code', 'country_name'
    ];
}
