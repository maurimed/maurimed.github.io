<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCoordinatesToStatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('states', function(Blueprint $table)
		{
            $table->integer('code')->after('id');
            $table->decimal('lat', 8, 6)->after('abbreviation');
            $table->decimal('lng', 10, 6)->after('abbreviation');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('states', function(Blueprint $table)
		{
            $table->dropColumn('code');
            $table->dropColumn('lat');
            $table->dropColumn('lng');
		});
	}

}
