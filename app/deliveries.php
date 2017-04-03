<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class deliveries extends Model
{
    protected $table='tools_delivered';
    protected $primaryKey='toolsdelivered_id';
    protected $fillable=['printing_agency', 'date_delivered', 'delivered_by', 'received_by'];
}
