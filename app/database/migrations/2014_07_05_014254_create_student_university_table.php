<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentUniversityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_university', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('student_id')->unsigned()->index();
			$table->foreign('student_id')->references('id')->on('students');
			$table->integer('university_id')->unsigned()->index();
			$table->foreign('university_id')->references('id')->on('universities');
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
		Schema::drop('student_university');
	}

}
