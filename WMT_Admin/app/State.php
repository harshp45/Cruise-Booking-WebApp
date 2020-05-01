<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table='states';
    protected $primaryKey='state_id';
    public $timestamps=false;
    protected $fillable = [
        'state_id','state_name','fk_country_id'
    ];
}
