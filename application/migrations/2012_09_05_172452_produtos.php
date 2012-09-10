<?php

class Produtos {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//tamanhos
		Schema::table('tamanhos', function($table)
		{
		    $table->create();
		    $table->increments('id');
            $table->integer('cod');
           	$table->string('nome');
		    $table->timestamps();
		});

		//cores
		Schema::table('cores', function($table)
		{
			$table->engine = 'InnoDB';

		    $table->create();
		    $table->increments('id');
           	$table->integer('cod')->nullable();
           	$table->string('nome');
           	$table->string('rgb', 7);
		    $table->timestamps();
		});

		
		//produto
		Schema::table('produtos', function($table)
		{
			$table->engine = 'InnoDB';
			
		    $table->create();
		    $table->increments('id');
		    $table->integer('cod');
		    $table->string('sku', 10);
           	$table->text('nome');
			$table->text('descricao');
			$table->text('especificacoes');
			$table->decimal('preco', 5, 2);
			$table->decimal('preco_promocional', 5, 2)->nullable();
			$table->text('slug');
			$table->integer('peso');
		    $table->timestamps();
		});

		//estoque produtos
		Schema::table('estoques', function($table)
		{
			
		    $table->create();
		    $table->increments('id');
		    $table->integer('id_produto');
           	$table->integer('id_tamanho');
           	$table->integer('id_cor');
           	$table->integer('qtd');
		    $table->timestamps();

		});


		// rel produtos cores
		Schema::table('produto_cores', function($table)
		{
		    $table->create();
		    $table->increments('id');
		    $table->integer('id_produto');
		    $table->integer('id_cor');
		    $table->timestamps();
		});

		// rel produtos fotos
		Schema::table('produto_fotos', function($table)
		{
		    $table->create();
		    $table->increments('id');
		    $table->integer('id_produto');
		    $table->integer('id_foto');
		    $table->timestamps();
		});

		// rel produto comentario
		Schema::table('comentario_produto', function($table)
		{
		    $table->create();

		    $table->increments('id');
		    $table->integer('id_produto');
		    $table->integer('id_comentario')->unique();
		    $table->timestamps();
		});

		// rel produto comentario
		Schema::table('marca_produto', function($table)
		{
		    $table->create();

		    $table->increments('id');
		    $table->integer('id_produto');
		    $table->integer('id_marca')->unique();
		    $table->timestamps();
		});


		// rel produto subcategoria_categorias
		Schema::table('produto_categorizacao', function($table)
		{
		    $table->create();

		    $table->increments('id');
		    $table->integer('id_produto');
		    $table->integer('id_subcategoria_categorias');
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
		Schema::table('tamanhos', function($table) {
            $table->drop();
        });
        Schema::table('cores', function($table) {
            $table->drop();
        });
        Schema::table('produtos', function($table) {
            $table->drop();
        });
        Schema::table('estoques', function($table) {
            $table->drop();
        });
        Schema::table('produto_cores', function($table) {
            $table->drop();
        });
        Schema::table('produto_fotos', function($table) {
            $table->drop();
        });
        Schema::table('produto_comentario', function($table) {
            $table->drop();
        });
        Schema::table('produto_categorizacao', function($table) {
            $table->drop();
        });
        Schema::table('marca_produto', function($table) {
            $table->drop();
        });
        
	}

}