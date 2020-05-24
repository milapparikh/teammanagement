<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Teamplayer extends Model {

    protected $table = 'teamplayers';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','team_id'
    ];

    public function team()
    {
        return $this->belongsTo('App\Team');
    }  

    /**
     * Get the players for the team.
     */
    public function players()
    {
        return $this->belongsTo('App\User');
    }  

    /*
    public function createdbymanager()
    {
        return $this->belongsTo('App\User','created_by_user_id','id');
    }*/  

}