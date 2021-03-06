<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role comes before User seeder here.
		$this->call(RoleTableSeeder::class);
		// User seeder will use the roles above created.
		$this->call(UserTableSeeder::class);
        // team name insert
        $this->call(TeamTableSeeder::class);

        // Default country data load
        $this->call(CountryTableSeeder::class);
        // Default city data load
        $this->call(CityTableSeeder::class);
    }
}
