<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUniversitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('universities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('city_id');
			$table->text('address');
			$table->string('website');
			$table->string('phone');
			$table->string('email');
			$table->string('tuition_link');
			$table->string('admissions_link');
			$table->string('sports_division');
			$table->string('closest_airport');
			$table->string('far_from_airport');
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
		Schema::drop('universities');
	}

}
