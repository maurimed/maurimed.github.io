<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCreatorToManagersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('managers', function(Blueprint $table)
		{
			$table->integer('created_by')->default(1)->after('institutionable_type');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('managers', function(Blueprint $table)
		{
			$table->dropColumn('created_by');
		});
	}

}
