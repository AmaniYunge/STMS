<?php
class StudentClass extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'student_class';
    protected $guarded = array("id");

    public function student(){
        return $this->hasMany('Student', 'student_id', 'id');
    }

}
