<?php
class Student extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student';
    protected $guarded = array("id");

    public function student_class(){
        return $this->belongsTo('StudentClass', 'student_id', 'id');
    }

    public function fee_payment(){
        return $this->hasMany('FeePayment', 'student_id', 'id');
    }

}
