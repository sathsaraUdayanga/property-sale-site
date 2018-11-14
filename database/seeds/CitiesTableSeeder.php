<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert([
            ['city_district_id'=>1,
            'city_province_id'=>6,
            'city_name_en'=> 'Akkaraipattu',
            'city_name_si'=>  'අක්කරපත්තුව', 
            'city_name_ta'=>  '',
            'city_postcode'=>  '',
            'city_latitide'=>  '',
            'city_longitude'=>  '']

                 
        ]);
    }
}
