<?php

use Illuminate\Database\Seeder;

use App\Country;
use App\City;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $india = Country::where('country_name', 'India')->first();
        $australia = Country::where('country_name', 'Australia')->first();
		$finland = Country::where('country_name', 'Finland')->first();
		$unitedstates = Country::where('country_name', 'United States')->first();

		$city = new City();
        $city->country_id = $india->id;
	    $city->city_name = 'ahmedabad';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $india->id;
	    $city->city_name = 'bomaby';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $india->id;
	    $city->city_name = 'chennai';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $india->id;
	    $city->city_name = 'surat';
	    $city->save();
        unset($city);

        //---------------------------------------------------

		$city = new City();
        $city->country_id = $australia->id;
	    $city->city_name = 'sydney';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $australia->id;
	    $city->city_name = 'melbourne';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $australia->id;
	    $city->city_name = 'brisbane';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $australia->id;
	    $city->city_name = 'perth';
	    $city->save();
        unset($city);

        //---------------------------------------------------

		$city = new City();
        $city->country_id = $finland->id;
	    $city->city_name = 'helsinki';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $finland->id;
	    $city->city_name = 'espoo';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $finland->id;
	    $city->city_name = 'tampere';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $finland->id;
	    $city->city_name = 'vantaa';
	    $city->save();
        unset($city);

        //---------------------------------------------------

		$city = new City();
        $city->country_id = $unitedstates->id;
	    $city->city_name = 'new york';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $unitedstates->id;
	    $city->city_name = 'los angeles';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $unitedstates->id;
	    $city->city_name = 'chicago';
	    $city->save();
        unset($city);

		$city = new City();
        $city->country_id = $unitedstates->id;
	    $city->city_name = 'houston';
	    $city->save();
        unset($city);

    }
}
