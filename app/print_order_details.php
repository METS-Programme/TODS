<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class print_order_details extends Model
{
    protected $table = 'print_order_details';
    protected $primaryKey = 'id';
    protected $fillable=['lpo_number', 'print_order_id', 'tools_id', 'quantity_ordered'];
}
