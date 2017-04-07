<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCounty extends Model
{
    //
    protected $table = 'subcounty';
    protected $primaryKey = 'subcounty_id';
    protected $fillable = [
        'name',
        'code',
        'longitude',
        'latitude',
        'district_id'
    ];
}
