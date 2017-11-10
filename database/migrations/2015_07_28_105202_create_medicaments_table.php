<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicamentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicaments', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('nom');
			$table->timestamps();
		});
        Schema::table('ordonnances', function(Blueprint $table){
            $table->integer('medicament_id')->unsigned()->index();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('medicaments');
	}

}
