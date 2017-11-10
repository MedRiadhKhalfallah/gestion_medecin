<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('visites', function(Blueprint $table)
		{
            $table->increments('id');
            $table->date('date_visite');
            $table->integer('lieu');
            $table->integer('nature_de_lacte');
            $table->integer('montant');
            $table->string('motif_consultation');
            $table->string('soins');
            $table->string('speculum');
            $table->string('tv');
            $table->string('echographie');
            $table->string('tests');
            $table->string('traitement');
			$table->timestamps();
		});
        Schema::table('ordonnances', function(Blueprint $table){
            $table->integer('visite_id')->unsigned()->index();
        });
        Schema::table('demandes', function(Blueprint $table){
            $table->integer('visite_id')->unsigned()->index();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('visites');
	}

}
