<?php

use Illuminate\Database\Seeder;

use App\Team;
use App\User;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team_owner = User::where('email', 'teamownergujarat@gmail.com')->first();
        $team = new Team();
	    $team->Team_name = 'rajasthanroyal';
        $team->created_by_user_id = $team_owner->id;
	    $team->save();
        unset($team);

        $team_owner = User::where('email', 'teamownerchennai@gmail.com')->first();
        $team = new Team();
	    $team->Team_name = 'chennaisuperkings';
        $team->created_by_user_id = $team_owner->id;
	    $team->save();
        unset($team);

        $team_owner = User::where('email', 'teamownerbanglore@gmail.com')->first();
        $team = new Team();
	    $team->Team_name = 'banglore';
        $team->created_by_user_id = $team_owner->id;
	    $team->save();
        unset($team);

        $team_owner = User::where('email', 'teamownerdelhi@gmail.com')->first();
        $team = new Team();
	    $team->Team_name = 'gujarattigers';
        $team->created_by_user_id = $team_owner->id;
	    $team->save();
        unset($team);

    }
}
