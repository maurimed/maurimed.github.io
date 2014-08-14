<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCountryCodeFieldToAmbassadorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ambassadors', function(Blueprint $table)
		{
			$table->string('country_code')->after('city_id');
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
            $table->dropColumn('country_code');

        });
	}

}
