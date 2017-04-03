<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class print_order extends Model
{
    protected $table = 'printing_orders';
    protected $primaryKey = 'printorder_id';
    protected $fillable=['lpo_number', 'date_ordered', 'tools_duration', 'comment', 'quantity_ordered', 'tools_id'];
}
