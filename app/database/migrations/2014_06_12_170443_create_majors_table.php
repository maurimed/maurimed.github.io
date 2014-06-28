<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMajorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('majors', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
            $table->string('slug');
            $table->string('image');
			$table->integer('academic_school_id');
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
		Schema::drop('majors');
	}

}
