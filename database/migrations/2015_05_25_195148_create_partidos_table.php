<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('partidos', function(Blueprint $table)
		{
		  $table->increments('id');
		  $table->date('fecha')->nullable();
		  $table->integer('juegos_local')->unsigned()->default(0);
		  $table->integer('juegos_visitante')->unsigned()->default(0);
		  $table->integer('jornada_id')->unsigned();		  
		  $table->foreign('jornada_id')->references('id')->on('jornadas');
      $table->integer('pareja_local_id')->unsigned();
      $table->foreign('pareja_local_id')->references('id')->on('parejas');		
      $table->integer('pareja_visitante_id')->unsigned();
      $table->foreign('pareja_visitante_id')->references('id')->on('parejas');
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
		Schema::drop('partidos');
	}

}
