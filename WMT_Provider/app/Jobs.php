<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    //
    protected $table='jobs';
    protected $primaryKey='job_id';
    public $timestamps=false;
    protected $fillable = [
        'job_id','job_name', 'job_type'
    ];
}
