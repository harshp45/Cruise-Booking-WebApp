<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    //
    protected $table='jobs';
    protected  $primaryKey= 'job_id';
    public $timestamps =false;
    protected $fillable=['job_name','job_type'];
}
