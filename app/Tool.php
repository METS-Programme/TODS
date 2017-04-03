<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
   /** protected $table = 'tools';

    public static function validator($input){

        $rules = array(
            'name'    =>'required|name'

        );

        return Validator::make($input,$rules);
    }**/
protected $primaryKey='tools_id';
protected $table='tools';
protected $fillable = ['code','name', 'specification', 'servicearea_id', 'package_id','description'];


/**public function service_area()
{
    return $this->belongsToMany('App\service_area')
        ->withTimestamps();
}*/

}
