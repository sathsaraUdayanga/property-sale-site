<?php

use Illuminate\Database\Seeder;

class ProvincesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provinces')->insert([
            [
            'province_name_en'=>'Western',
            'province_name_si'=>'බස්නාහිර',
            'province_name_ta'=>'மேல்'
            ],
            [
            'province_name_en'=>'Central',
            'province_name_si'=>'මධ්යම',
            'province_name_ta'=>'மத்திய'],


            ['province_name_en'=>'Southern',
            'province_name_si'=> 'දකුණු', 
            'province_name_ta'=>'தென்'],

            ['province_name_en'=>'North Western',
            'province_name_si'=>'වයඹ', 
            'province_name_ta'=>'வட மேல்'],

            ['province_name_en'=>'Sabaragamuwa',
            'province_name_si'=> 'සබරගමුව',
            'province_name_ta'=> 'சபரகமுவ'],

            ['province_name_en'=>'Eastern', 
            'province_name_si'=>'නැගෙනහිර',
            'province_name_ta'=> 'கிழக்கு'],

            ['province_name_en'=>'Uva', 
            'province_name_si'=>'ඌව', 
            'province_name_ta'=>'ஊவா'],

            ['province_name_en'=>'North Central', 
            'province_name_si'=>'උතුරු මැද',
            'province_name_ta'=>'வட மத்திய'],

            ['province_name_en'=>'Northern',
            'province_name_si'=> 'උතුරු',
            'province_name_ta'=>'வட']

            
        ]);

    }
}
