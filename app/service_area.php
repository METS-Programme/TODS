<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service_area extends Model
{
    //
    protected $table = 'service_area';
    protected $primaryKey = 'servicearea_id';
    protected $fillable = [
        'name',
        'description',
        'healthfacility_id'
    ];
}
