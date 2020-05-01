<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cruise extends Model
{
    //
    protected $table='cruise';
    protected $primaryKey='cruise_id';
    public $timestamps=false;
    protected $fillable = [
        'cruise_id','cruise_name', 'cruise_type','cruise_image','cruise_source','cruise_destination,cruise_no_of_nights','cruise_price','cruise_departure_date','cruise_departure_port','cruise_arrival_port','fk_provider_id'
    ];
}
