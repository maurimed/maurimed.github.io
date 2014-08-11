<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameCityToStateInSubscribersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('subscribers', function(Blueprint $table){

            $table->dropColumn('city_id');

            $table->integer('state_id')->default(1);

        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('subscribers', function(Blueprint $table){

            $table->dropColumn('state_id');

            $table->integer('city_id');


        });
	}

}
