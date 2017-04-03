<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class package extends Model
{
    //
    protected $table = 'packaging';
    protected $primaryKey = 'package_id';
    protected $fillable = [
        'package_name',
        'quantity',
    ];
}
