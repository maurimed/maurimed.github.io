<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentRequirementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_requirement', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id')->unsigned()->index();
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('name');
            $table->string('file');
            $table->tinyInteger('status');
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
		Schema::drop('student_requirement');
	}

}
