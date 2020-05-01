<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $table='places';
    protected  $primaryKey= 'place_id';
    public $timestamps =false;
    protected $fillable=['place_name','place_location','place_image','place_description'];
}
