<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('phone');
            $table->integer('bdate');
            $table->string('programe');
            $table->integer('area_id');
            $table->string('gender');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('student');
	}

}
