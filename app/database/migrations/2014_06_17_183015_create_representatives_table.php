<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRepresentativesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('representatives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('firstname');
            $table->string('lastname');
            $table->integer('city_id');
            $table->string('phone');
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
		Schema::drop('representatives');
	}

}
