<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Team extends Model {

    protected $table = 'teams';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */ 
    protected $fillable = [
        'team_name','created_by_user_id'
    ];


	/**
     * Get the teamplayer for the blog post.
     */
    public function teamplayers()
    {
        return $this->hasMany('App\Teamplayer');
    }


    public function user()
    {
        return $this->belongsTo('App\User','created_by_user_id', 'id');
    }    
}