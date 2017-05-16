<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ip_order_details extends Model
{
    protected $table = 'ip_order_details';
    protected $primaryKey = 'toolsordered_id';
    protected $fillable=[
        'lpo_number',
        'order_id',
        'tools_id',
        'quantity'
    ];
}
