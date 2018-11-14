<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('districts')->insert([
            [
           
            'district_name_en'=> 'Ampara',
            'district_name_si'=>  'අම්පාර', 
            'district_name_ta'=>  'அம்பாறை',
            'district_province_id'=>6],
            
            ['district_province_id'=>8, 
            'district_name_en'=> 'Anuradhapura',
            'district_name_si'=>   'අනුරාධපුරය',
            'district_name_ta'=>   'அனுராதபுரம்'],
            
            ['district_province_id'=>7,
            'district_name_en'=>  'Badulla',
            'district_name_si'=>   'බදුල්ල',
            'district_name_ta'=>   'பதுளை'],
            
            ['district_province_id'=>6,
            'district_name_en'=>  'Batticaloa',
            'district_name_si'=>   'මඩකලපුව',
            'district_name_ta'=>   'மட்டக்களப்பு'],
            
            ['district_province_id'=>1, 
            'district_name_en'=> 'Colombo', 
            'district_name_si'=>  'කොළඹ', 
            'district_name_ta'=>  'கொழும்பு'],
            
            ['district_province_id'=>3, 
            'district_name_en'=> 'Galle',
            'district_name_si'=>   'ගාල්ල', 
            'district_name_ta'=>  'காலி'],
            
            ['district_province_id'=>1,
            'district_name_en'=>  'Gampaha',
            'district_name_si'=>  'ගම්පහ',
            'district_name_ta'=>  'கம்பஹா'],
            
            ['district_province_id'=>3,
            'district_name_en'=>  'Hambantota',
            'district_name_si'=>   'හම්බන්තොට',
            'district_name_ta'=>   'அம்பாந்தோட்டை'],
            
            ['district_province_id'=>9, 
            'district_name_en'=> 'Jaffna',
            'district_name_si'=>   'යාපනය',
            'district_name_ta'=>   'யாழ்ப்பாணம்'],
            
            ['district_province_id'=>1,
            'district_name_en'=>  'Kalutara',
            'district_name_si'=>   'කළුතර',
            'district_name_ta'=>   'களுத்துறை'],
            
            ['district_province_id'=>2, 
            'district_name_en'=> 'Kandy',
            'district_name_si'=>   'මහනුවර',
            'district_name_ta'=>   'கண்டி'],
            
            ['district_province_id'=>5, 
            'district_name_en'=> 'Kegalle',
            'district_name_si'=>   'කෑගල්ල',
            'district_name_ta'=>   'கேகாலை'],
            
            ['district_province_id'=>9, 
            'district_name_en'=> 'Kilinochchi', 
            'district_name_si'=>  'කිලිනොච්චිය', 
            'district_name_ta'=>  'கிளிநொச்சி'],
            
            ['district_province_id'=>4, 
            'district_name_en'=> 'Kurunegala', 
            'district_name_si'=>  'කුරුණෑගල',
            'district_name_ta'=>   'குருணாகல்'],
            
            ['district_province_id'=>9,
            'district_name_en'=>  'Mannar', 
            'district_name_si'=>  'මන්නාරම',
            'district_name_ta'=>   'மன்னார்'],
            
            ['district_province_id'=>2,
            'district_name_en'=>  'Matale', 
            'district_name_si'=>  'මාතලේ', 
            'district_name_ta'=>   'மாத்தளை'],
            
            ['district_province_id'=>3,
            'district_name_en'=>  'Matara',
            'district_name_si'=>   'මාතර',
            'district_name_ta'=>   'மாத்தறை'],
            
            ['district_province_id'=>7,
            'district_name_en'=>  'Monaragala',
            'district_name_si'=>   'මොණරාගල',
            'district_name_ta'=>   'மொணராகலை'],
            
            ['district_province_id'=>9, 
            'district_name_en'=> 'Mullaitivu', 
            'district_name_si'=>  'මුලතිව්',
            'district_name_ta'=>   'முல்லைத்தீவு'],
            
            ['district_province_id'=>2, 
            'district_name_en'=> 'Nuwara Eliya',
            'district_name_si'=>   'නුවර එළිය',
            'district_name_ta'=>   'நுவரேலியா'],
            
            ['district_province_id'=>8, 
            'district_name_en'=> 'Polonnaruwa',
            'district_name_si'=>   'පොළොන්නරුව', 
            'district_name_ta'=>  'பொலன்னறுவை'],
            
            ['district_province_id'=>4,
            'district_name_en'=>  'Puttalam', 
            'district_name_si'=>  'පුත්තලම',
            'district_name_ta'=>   'புத்தளம்'],
            
            ['district_province_id'=>5,
            'district_name_en'=>  'Ratnapura', 
            'district_name_si'=>  'රත්නපුර',
            'district_name_ta'=>   'இரத்தினபுரி'],
            
            ['district_province_id'=>6,
            'district_name_en'=>  'Trincomalee',
            'district_name_si'=>   'ත්රිකුණාමලය',
            'district_name_ta'=>   'திருகோணமலை'],
            
            ['district_province_id'=>9,
            'district_name_en'=>  'Vavuniya',
            'district_name_si'=>   'වව්නියාව',
            'district_name_ta'=>   'வவுனியா']
            

            
        ]);

    }
}
