<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jugadores', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->string('slug');
			$table->binary('foto')->nullable();		
			$table->string('telefono')->nullable();
			$table->string('email')->nullable();
			$table->boolean('reserva')->default(false);
			$table->integer('pareja_id')->unsigned()->nullable();
			$table->foreign('pareja_id')->references('id')->on('parejas');
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users');			
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
	  Schema::drop('jugadores');
	}

}
