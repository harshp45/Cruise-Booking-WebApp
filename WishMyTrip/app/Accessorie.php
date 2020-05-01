<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accessorie extends Model
{
    //
    protected $table='accessories';
    protected  $primaryKey= 'accessories_id';
    public $timestamps =false;
    protected $fillable=['accessories_image','accessories_name','accessories_category','accessories_description','accessories_price'];
}
