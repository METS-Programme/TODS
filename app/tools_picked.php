<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tools_picked extends Model
{
    //
    protected $table = 'tools_picked';
    protected $primaryKey = 'toolspicked_id';
    protected $fillable = [
        'quantity_ordered',
        'quantity_authorized',
        'quantity_collected',
        'comments'

    ];
}
