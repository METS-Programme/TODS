<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ip_order extends Model
{
    protected $table = 'ip_order';
    protected $primaryKey = 'order_id';
    protected $fillable=[
        'lpo_number',
        'date_ordered',
        'tools_duration',
        'ordered_by',
        'ip_id',
        'comments',
        'toolsordered_id',
        ];
}
