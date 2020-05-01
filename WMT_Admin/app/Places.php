<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    //
    protected $table='places';
    protected $primaryKey='place_id';
    public $timestamps=false;
    protected $fillable = [
        'place_id','place_location', 'place_image','place_description','fk_city_id'
    ];
}
