<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patients', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('n_cnam');
            $table->integer('payment');
            $table->string('nom');
            $table->string('prenom');
            $table->integer('genre');
            $table->date('date_n');
            $table->string('adresse');
            $table->string('profession');
            $table->string('tel_mob');
            $table->string('tel_fix');
            $table->integer('etat_civil');
            $table->string('ville');
            $table->string('email');
            $table->string('atd_gyneco_obstetricaux');
            $table->string('ant_medicaux');
            $table->string('ant_chirurgicaux');
			$table->timestamps();
		});
        Schema::table('visites', function(Blueprint $table){
            $table->integer('patient_id')->unsigned()->index();
        });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patients');
	}

}
