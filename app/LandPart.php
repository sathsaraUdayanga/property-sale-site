<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LandPart extends Model
{
    protected $primaryKey='city_id';

    protected $fillable = [
        'land_parts_area',
        'land_parts_price',
        'land_parts_status',
        'land_parts_land_id'
    ];

    public function land(){

        return $this->belongsTo('App\Land','land_id');
     
        }
}
