<?php

class Pages {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		
	
        Schema::table('pages', function($table)
		{
		    $table->create();
		    $table->string('slug')->unique();
           	$table->text('title');
			$table->text('text');
			$table->text('others')->nullable();
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
		Schema::table('pages', function($table) {
            $table->drop();
        });
	}

}