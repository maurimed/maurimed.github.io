<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRequirementUniversityTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('requirement_university', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('requirement_id')->unsigned()->index();
			$table->foreign('requirement_id')->references('id')->on('requirements');
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
		Schema::drop('requirement_university');
	}

}
