<?php

class Fotos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotos', function($table)
		{

		    $table->create();
		    $table->increments('id');

           	$table->string('alt')->nullable();
           	$table->string('legenda')->nullable();
           	$table->string('foto');
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
		Schema::table('fotos', function($table) {
            $table->drop();
        });
	}

}