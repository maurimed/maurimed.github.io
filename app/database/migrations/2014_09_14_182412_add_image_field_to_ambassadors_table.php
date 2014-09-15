<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddImageFieldToAmbassadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ambassadors', function(Blueprint $table)
		{
            $table->string('image')->default('default')->after('id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ambassadors', function(Blueprint $table)
		{
            $table->dropColumn('image');
		});
	}

}
