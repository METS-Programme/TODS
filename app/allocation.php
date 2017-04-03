<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allocation extends Model
{
    protected $table = 'allocation';
    protected $primaryKey = 'allocation_id';
    protected $fillable = [
        'quantity',
        'date_generated',
        'baseallocation_id'
    ];


}
