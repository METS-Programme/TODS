<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class allocation extends Model
{
    protected $table = 'allocation';
    protected $primaryKey = 'allocation_id';
    protected $fillable = [
        'baseallocation_id',
        'print_order_delivary_id',
        'health_facility_level_id',
        'tool_id',
        'quantity',
        'allocated_by',
        'date_allocated',
        'created_at_in_db',
        'date_updated',
        'status'
    ];
    //Allocation HAS Facility Level
    public function facilityLevel(){

        return $this->hasMany('App\FacilityLevel');
    }


}
