<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $primaryKey='district_id';

    protected $fillable = [
      'district_name_en',
      'district_name_si',
      'district_name_ta',
      'district_province_id'
    ];

    public function province(){

        return $this->belongsTo('App\Province','province_id');
     
        }

    public function cities(){

        return $this->hasMany('App\City','city_id');
        
        }

    public function lands(){

        return $this->hasMany('App\Land','land_id');
        
        }
}
