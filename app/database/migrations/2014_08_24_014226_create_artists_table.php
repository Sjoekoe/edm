<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('website')->nullable();
            $table->text('bio')->nullable();
            $table->string('label')->nullable();
            $table->string('promomail')->nullable();
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
		Schema::drop('artists');
	}

}
