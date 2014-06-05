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


    public function area_fee(){
        return $this->belongsTo('AreaFee', 'id', 'area_id');
    }

}
