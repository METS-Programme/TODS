<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    //
    protected $table='delivery';
    protected $primaryKey='delivery_id';
    protected $fillable=['printing_agency', 'date_delivered', 'delivered_by', 'received_by','printingorder_id'];
}
