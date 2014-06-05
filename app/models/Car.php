<?php

class Car extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cars';
    protected $guarded = array("id");

    public function area(){
        return $this->hasMany('CarArea', 'car_id', 'id');
    }

    public function driver(){
        return $this->hasMany('CarDriver', 'car_id', 'id');
    }
}
