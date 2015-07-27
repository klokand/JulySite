<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_images', function(Blueprint $table)
		{
			$table->increments('id')->unsigned();
			$table->integer('property_id')->unsigned();
			$table->string('image');
			$table->foreign('property_id')->references('id')->on('properties')->onDelete('CASCADE')->onUpdate('CASCADE');
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
		Schema::drop('property_images');
	}

}
