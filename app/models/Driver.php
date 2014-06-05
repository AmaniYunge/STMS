<?php
class Driver extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'driver';
    protected $guarded = array("id");

    public function car(){
        return $this->hasMany('CarDriver', 'driver_id', 'id');
    }

}
