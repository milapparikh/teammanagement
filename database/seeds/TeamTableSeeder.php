<?php

use Illuminate\Database\Seeder;

use App\Team;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = new Team();
	    $team->Team_name = 'rajasthanroyal';
	    $team->save();
        unset($team);

        $team = new Team();
	    $team->Team_name = 'chennaisuperkings';
	    $team->save();
        unset($team);

        $team = new Team();
	    $team->Team_name = 'banglore';
	    $team->save();
        unset($team);

        $team = new Team();
	    $team->Team_name = 'gujarattigers';
	    $team->save();
        unset($team);

    }
}
