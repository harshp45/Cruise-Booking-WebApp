<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    protected $table = 'contactus';
    protected $primaryKey = 'contactus_id';
    public $timestamps = false;
    protected $fillable = ['contactus_name','contactus_email','contactus_comments'];
}


