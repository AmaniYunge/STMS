<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('driver', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('phone');
            $table->string('gender');
            $table->string('resident_area');
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
		Schema::drop('driver');
	}

}
