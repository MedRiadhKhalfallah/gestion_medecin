<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('examens', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nom');
			$table->timestamps();
		});
        Schema::table('demandes', function(Blueprint $table){
            $table->integer('examen_id')->unsigned()->index();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('examens');
	}

}
