<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    protected $table='hotels';
    protected $primaryKey='hotel_id';
    public $timestamps=false;
    protected $fillable = [
        'hotel_id','hotel_name', 'hotel_image','hotel_rating','fk_city_id'
    ];
}
