<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $primaryKey='city_id';

    protected $fillable = [
      'city_name_en',
      'city_name_si',
      'city_name_ta',
      'city_postcode',
      'city_latitide',
      'city_longitude',
      'city_province_id',
      'city_district_id'
    ];

    public function province(){

        return $this->belongsTo('App\Province','province_id');
     
        }

    public function district(){

        return $this->belongsTo('App\District','district_id');
        
        }

    public function lands(){

        return $this->hasMany('App\Land','land_id');
        
        }
}
