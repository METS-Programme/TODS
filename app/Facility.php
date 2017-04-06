<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    //
    protected $table='health_facility';
    protected $primaryKey='healthfacility_id';
    protected $fillable=['name', 'code', 'ip_id', 'facilitylevel_id','subcounty_id'];
}
