<?php

use Illuminate\Database\Seeder;

use App\Country;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new Country();
        $country->code = 'IN';
        $country->country_name = 'India';
        $country->save();
        unset($country);

        $country = new Country();
        $country->code = 'AU';
        $country->country_name = 'Australia';
        $country->save();
        unset($country);

        $country = new Country();
        $country->code = 'FI';
        $country->country_name = 'Finland';
        $country->save();
        unset($country);

        $country = new Country();
        $country->code = 'US';
        $country->country_name = 'United States';
        $country->save();
        unset($country);
/*
        $country = new Country();
        $country->code = 'NZ';
        $country->country_name = 'New Zealand';
        $country->save();
        unset($country);

        $country = new Country();
        $country->code = 'JP';
        $country->country_name = 'Japan';
        $country->save();
        unset($country);

        $country = new Country();
        $country->code = 'BR';
        $country->country_name = 'Brazil';
        $country->save();
        unset($country);
*/
    }
}
