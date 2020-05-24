<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', 'adminmanager')->first();
        $team_owner = Role::where('name', 'teamowner')->first();
		$player = Role::where('name', 'player')->first();

		$ousers = new User();
        $ousers->role_id = $admin->id;
	    $ousers->name = 'admin';
	    $ousers->email = 'admin@gmail.com';
	    $ousers->password = bcrypt('Admin@123');
	    $ousers->save();
        unset($ousers);

		$ousers = new User();
        $ousers->role_id = $team_owner->id;
	    $ousers->name = 'teamownergujarat';
	    $ousers->email = 'teamownergujarat@gmail.com';
	    $ousers->password = bcrypt('Owner@123');
	    $ousers->save();
        unset($ousers);

		$ousers = new User();
        $ousers->role_id = $team_owner->id;
	    $ousers->name = 'teamownerchennai';
	    $ousers->email = 'teamownerchennai@gmail.com';
	    $ousers->password = bcrypt('Owner@1234');
	    $ousers->save();
        unset($ousers);

		$ousers = new User();
        $ousers->role_id = $team_owner->id;
	    $ousers->name = 'teamownerdelhi';
	    $ousers->email = 'teamownerdelhi@gmail.com';
	    $ousers->password = bcrypt('Owner@1235');
	    $ousers->save();
        unset($ousers);

		$ousers = new User();
        $ousers->role_id = $team_owner->id;
	    $ousers->name = 'teamownerbanglore';
	    $ousers->email = 'teamownerbanglore@gmail.com';
	    $ousers->password = bcrypt('Owner@1236');
	    $ousers->save();
        unset($ousers);

		$ousers = new User();
        $ousers->role_id = $player->id;
	    $ousers->name = 'sachin';
	    $ousers->email = 'sachin@gmail.com';
	    $ousers->password = bcrypt('sachin@123');
	    $ousers->save();
        unset($ousers);


		$ousers = new User();
        $ousers->role_id = $player->id;
	    $ousers->name = 'dhoni';
	    $ousers->email = 'dhoni@gmail.com';
	    $ousers->password = bcrypt('dhoni@123');
	    $ousers->save();
        unset($ousers);


		$ousers = new User();
        $ousers->role_id = $player->id;
	    $ousers->name = 'suresh';
	    $ousers->email = 'suresh@gmail.com';
	    $ousers->password = bcrypt('suresh@123');
	    $ousers->save();
        unset($ousers);

    }
}
