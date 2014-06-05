<?php
class AreaFee extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'area_fee';
    protected $guarded = array("id");

    public function areas(){
        return $this->belongsTo('Area', 'area_id', 'id');
    }

}
