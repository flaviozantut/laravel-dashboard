<?php

class Marcas {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//Marcas
		Schema::table('marcas', function($table)
		{
		    $table->create();
		    $table->increments('id');

		    $table->integer('cod');
		    $table->string('logo');
           	$table->string('nome');
		    $table->timestamps();
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('marcas', function($table) {
            $table->drop();
        });
	}

}