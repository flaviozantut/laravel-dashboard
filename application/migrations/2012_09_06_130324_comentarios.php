<?php

class Comentarios {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comentarios', function($table)
		{
		    $table->create();
		    $table->increments('id');
           	$table->string('nome');
           	$table->string('email');
           	$table->text('comentario');
           	$table->integer('status')->nullable();
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
		Schema::table('comentarios', function($table) {
            $table->drop();
        });
	}

}