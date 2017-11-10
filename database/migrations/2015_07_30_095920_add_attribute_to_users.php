<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAttributeToUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
            $table->string('prenom');
            $table->string('n_tel_cabinet');
            $table->string('n_tel_mobile');
            $table->string('adresse');
            $table->string('specialite');
            $table->string('siteweb');
            $table->string('about');
            $table->integer('role');
            $table->string('img');
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
			//
		});
	}

}
