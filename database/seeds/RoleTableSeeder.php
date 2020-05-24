<?php

use Illuminate\Database\Seeder;

use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
	    $role->name = 'player';
	    $role->description = 'registered as players';
	    $role->save();
        unset($role);

        $role = new Role();
        $role->name = 'teamowner';
        $role->description = 'registered as owners';
        $role->save();
        unset($role);

        $role = new Role();
        $role->name = 'teammanager';
        $role->description = 'registered as managers';
        $role->save();
        unset($role);
    }
}
