<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Land extends Model
{
    protected $primaryKey='land_id';

    protected $fillable = [
        'land_name',
            'land_address',
            'land_latitide',
            'land_longitude',
            'land_province_id',
            'land_district_id',
            'land_city_id',
            'land_city',
            'land_discription',
            'land_area'
      ];


    public function province(){

        return $this->belongsTo('App\Province','province_id');

        }


    public function district(){

        return $this->belongsTo('App\District','district_id');

        }


    public function city(){

        return $this->belongsTo('App\City','city_id');

        }

    public function land_parts(){

        return $this->hasMany('App\LandPart','land_part_id');

        }

}
