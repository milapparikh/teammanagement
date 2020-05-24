<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\API\BaseController as BaseController;
use App\User;
use App\Team;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Teamplayer;

class TeamController extends BaseController
{
	/** 
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
    public function store(Request $request)
    {
    	//$input = $request->all();
    	$data = $request->json()->all();
    	$user = Auth::user(); 

 		$validator = Validator::make($data, [
            'user_id' => 'required|exists:users,id',
            'team_name' => 'required|exists:teams,team_name',
            'team_player' => 'present|array',     
            'team_player.*.player_name' => 'required|string',
            'team_player.*.player_email' => 'required|exists:users,email' 
        ]);

		if($validator->fails()){
			 return $this->sendError('Validation Error.', $validator->errors(), 400);       
        }

        $teamparams = [
            'team_name' => $data['team_name'],
            'created_by_user_id' => $user->id
        ];
        $oTeam = Team::firstOrCreate($teamparams);
        $snTeamId = $oTeam->id;

        $users_email = array_column($data['team_player'], 'player_email');
        $result = User::whereIn('email', $users_email)->select('id')->get();

        foreach ($result as $key=>$value) {
           $data  = [ 
                'user_id'=>$value->id,
                'team_id'=>$snTeamId
           ];

           Teamplayer::firstOrCreate($data);
        }
/*
        $oTeamplayer = new Teamplayer;
        //$oTeamPlayers = $oTeamplayer->players()->insert($data);
        //Teamplayer::players()->insert($data);
        $user->teamplayers()->players()->insert($data);
*/

        $success['team_id'] =  $snTeamId;
        return $this->sendResponse($success, 'Team Player Added successfully.',200);
    }
}
