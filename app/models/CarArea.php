<?php

class CarArea extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'car_areas';
    protected $guarded = array("id");

    public function car(){
        return $this->belongsTo('Car', 'car_id', 'id');
    }

    public function area(){
        return $this->belongsTo('Area', 'area_id', 'id');
    }

}
