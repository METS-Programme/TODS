<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FacilityLevel extends Model
{
    //
    protected $table = 'facility_level';
    protected $primaryKey = 'facilitylevel_id';
    protected $fillable = [
        'name',
        'description',
        'allocation_id'
        ];
}
