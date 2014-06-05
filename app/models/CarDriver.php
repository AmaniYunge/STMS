<?php
class CarDriver extends Eloquent {
/**
 * Created by PhpStorm.
 * User: hristraining
 * Date: 6/5/14
 * Time: 9:54 AM
 */

protected $table = 'car_driver';
protected $guarded = array("id");

public function car(){
    return $this->belongsTo('Car', 'car_id', 'id');
}

public function driver(){
    return $this->belongsTo('Driver', 'driver_id', 'id');
}

}
