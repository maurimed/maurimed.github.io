<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateFieldsToSubscribersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subscribers', function(Blueprint $table)
		{
            $table->dropColumn('region');
            $table->dropColumn('country');
            $table->dropColumn('city');

            $table->string('interest')->after('phone');
            $table->string('find_us')->after('phone');
            $table->string('age')->after('phone');
            $table->integer('city_id')->default(1)->after('phone');

        });
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subscribers', function(Blueprint $table)
		{
            $table->string('region');
            $table->string('country');
            $table->string('city');


            $table->dropColumn('interest');
            $table->dropColumn('find_us');
            $table->dropColumn('age');
            $table->dropColumn('city_id');
		});
	}

}
