<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilisateursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utilisateurs', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('login');
            $table->string('pwd');
            $table->string('nom');
            $table->string('prenom');
            $table->string('n_tel_cabinet');
            $table->string('n_tel_mobile');
            $table->string('adresse');
            $table->string('specialite');
            $table->string('email');
            $table->string('siteweb');
            $table->string('about');
            $table->integer('role');
            $table->string('img');
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
		Schema::drop('utilisateurs');
	}

}
