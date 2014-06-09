<?php

class Area extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'areas';
    protected $guarded = array("id");

    public function car(){
        return $this->hasMany('CarArea', 'area_id', 'id');
    }

    public function fee(){
        return $this->hasMany('AreaFee', 'area_id', 'id');
    }

}
