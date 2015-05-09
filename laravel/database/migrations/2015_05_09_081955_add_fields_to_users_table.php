<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->integer('access_rights')->default(2);
			$table->string('location', 64);
			$table->string('cell', 32);
			$table->string('position', 64);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			$table->dropColumn('access_rights');
			$table->dropColumn('location');
			$table->dropColumn('cell');
			$table->dropColumn('position');
		});
	}

}
