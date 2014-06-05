<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeePaymentTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fee_payment', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id');
            $table->integer('year');
            $table->string('term1_payment');
            $table->string('term2_payment');
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
		Schema::drop('fee_payment');
	}

}
