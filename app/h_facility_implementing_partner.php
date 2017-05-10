<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class h_facility_implementing_partner extends Model
{
    //
    protected $table = 'h_facility_implementing_partner';
    protected $fillable = [
        'health_facility_id',
        'facilitylevel_id',
        'ip_id',
    ];

    public function facility(){
        $this->hasMany('Facility', 'healthfacility_id');
    }
    public function implimenting_partner(){
        $this->hasMany('implimenting_partner', 'ip_id');
    }
    public function facility_level(){
        $this->hasMany('facility_level', 'facilitylevel_id');
    }
}
