<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table='orders';
    protected  $primaryKey= 'order_id';
    public $timestamps =false;
    protected $fillable=['fk_user_id','source','destination','booking_date','sailing_date','fk_cruise_id','fk_provider_id','booking_status','Number_of_persons','fk_user_email'];
}
