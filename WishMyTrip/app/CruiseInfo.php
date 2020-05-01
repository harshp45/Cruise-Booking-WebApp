<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CruiseInfo extends Model
{
    //
    protected $table='cruise_provider';
    protected $primaryKey='provider_id';
    public $timestamps=false;
    protected $fillable = [
        'provider_name', 'provider_password','provider_email_id','provider_address','fk_city_id'
    ];
}
