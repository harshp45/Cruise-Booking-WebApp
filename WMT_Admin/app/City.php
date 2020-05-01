<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table='cities';
    protected $primaryKey='city_id';
    public $timestamps=false;
    protected $fillable = [
        'city_id','city_name','fk_state_id'
    ];
}
