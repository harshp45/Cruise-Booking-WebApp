<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected  $primaryKey= 'user_id';
    public $timestamps =false;
    protected $fillable=['user_email_id','user_name','user_password','user_dob','user_gender','user_mobile_no','user_address'];
}
