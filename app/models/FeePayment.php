<?php
class FeePayment extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fee_payment';
    protected $guarded = array("id");


    public function student(){
        return $this->belongsTo('Student', 'student_id', 'id');
    }

}
