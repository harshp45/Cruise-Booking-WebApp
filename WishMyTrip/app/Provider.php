<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //
    protected $table='cruise_provider';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $fillable = [
        'provider_id','provider_name', 'provider_password','provider_email_id','provider_address','fk_city_id'];
}
