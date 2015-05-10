<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->longText('message');
			$table->string('subject', 200);
			$table->timestamp('opened_at')->nullable();
			
			$table->integer('from_id')->unsigned();
			$table->foreign('from_id')->references('id')->on('users');

			$table->integer('to_id')->unsigned();
			$table->foreign('to_id')->references('id')->on('users');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('messages');
	}

}
