<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funding_agency extends Model
{
    //
    protected $table = 'funding_agency';
    protected $primaryKey = 'funding_agency_id';

    //Funding Agency has many IPs
    public function ips()
    {
        return $this->hasMany('App\implementing_partner');
    }
}
