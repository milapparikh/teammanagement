<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use Laravel\Passport\HasApiTokens;



class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array 
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];  

    /**
     * Get the user that owns the role.
     */
    public function role()
    {
        return $this->belongsTo('App\Role');
    }    

    /**
     * Get the teamplayers for the users.
     */
    public function teamplayers()
    {
        return $this->belongsTo('App\Teamplayer');
    } 


    public function team()
    {
        return $this->hasOne('App\Team','created_by_user_id', 'id');
    }

    /**
     * Get the phone record associated with the user.
     */
    public function userdetail()
    {
        return $this->hasOne('App\Userdetail');

    }    
}
