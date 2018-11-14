<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $primaryKey='province_id';

  protected $fillable = [
    'province_name_en',
    'province_name_si',
    'province_name_ta'
  ];

  public function districks(){

    return $this->hasMany('App\District','district_id');

}

public function cities(){

    return $this->hasMany('App\City','city_id');

}

public function lands(){

    return $this->hasMany('App\Land','land_id');

}


}
