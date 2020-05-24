<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    protected $table = 'roles';


    /**
     * The attributes that are mass assignable.
     *
     * @var array 
     */
    protected $fillable = [
        'name', 'description'
    ];

    /**
     * Get the role associated with the user.
     */
    public function users()
    {
        //return $this->belongsToMany(User::class);
        return $this->hasMany('App\User');
    }
}