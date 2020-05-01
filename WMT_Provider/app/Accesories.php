<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accesories extends Model
{
    //
    protected $table='accessories';
    protected $primaryKey='accessories_id';
    public $timestamps=false;
    protected $fillable = [
        'accessories_id','accessories_name', 'accessories_image','accessories_category','accessories_description','accessories_price'
    ];
}
