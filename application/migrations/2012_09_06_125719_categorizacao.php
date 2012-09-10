<?php

class Categorizacao {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//Categorias
		Schema::table('categorias', function($table)
		{
		    $table->create();

		    $table->increments('id');
            $table->integer('cod');
           	$table->string('nome');
		    $table->timestamps();
		});
		//Subcategorias
		Schema::table('subcategorias', function($table)
		{
		    $table->create();

		    $table->increments('id');
            $table->integer('cod');
           	$table->string('nome');
		    $table->timestamps();
		});
		//Rel subcategoria com categoria
		Schema::table('subcategoria_categorias', function($table)
		{
		    $table->create();

		    $table->increments('id');
		    $table->integer('id_categoria');
		    $table->integer('id_subcategoria');
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
		Schema::table('categorias', function($table) {
            $table->drop();
        });
        Schema::table('subcategorias', function($table) {
            $table->drop();
        });
         Schema::table('subcategoria_categorias', function($table) {
            $table->drop();
        });
	}

}