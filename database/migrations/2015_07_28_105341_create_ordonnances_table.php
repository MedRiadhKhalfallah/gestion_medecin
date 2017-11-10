<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdonnancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordonnances', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('form');
            $table->string('to');
            $table->integer('n_fois');
            $table->integer('n_j');
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
		Schema::drop('ordonnances');
	}

}
