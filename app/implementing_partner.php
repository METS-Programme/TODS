<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\funding_agency;

class implementing_partner extends Model
{
    //
    protected $table = 'implementing_partner';
    protected $primaryKey = 'ip_id';
    protected $fillable = [
        'name',
        'comprehensive_partner',
        'funding_agency_id',
        'regions',
        'districts',
        'vision',
        'location',
        'about',
        'image'
    ];
    /*public function scopePublished($query){
        $query->where('created_at', '<=' Carbon::now());
    }*/

    //An Ip belongs to a funding Agency
    public function fundingAgency(){

        return $this->belongsTo('App\funding_agency');
    }
    public function Facility(){
        $this->hasMany('Facility', 'ip_id');
    }


}
