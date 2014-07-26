<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCoordinatesToCountriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('countries', function(Blueprint $table)
		{
            $table->decimal('lat', 8, 6)->after('continent_id');
            $table->decimal('lng', 10, 6)->after('continent_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('countries', function(Blueprint $table)
		{
            $table->dropColumn('lat');
            $table->dropColumn('lng');
		});
	}

}
