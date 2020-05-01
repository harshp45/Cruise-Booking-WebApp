<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotels extends Model
{
    //
    protected $table='hotels';
    protected  $primaryKey= 'hotel_id';
    public $timestamps =false;
    protected $fillable=['hotel_name','hotel_image','hotel_place','hotel_description','hotel_rating'];
}
