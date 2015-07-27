<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function(Blueprint $table)
		{
			$table->increments('id');
			$table->enum('type',['house','unit','land','apartment','town house']);
			$table->text('address');
			$table->text('price')->default('');
			$table->enum('state',['available','sold','underContract']);
			$table->integer('bedNo')->default('');
			$table->integer('bathNo')->default('');
			$table->integer('gargeCarNo')->default('');
			$table->string('landSize')->default('');
			$table->string('buildingSize')->default('');
			$table->string('floorPlan')->default('');
			$table->text('summary')->default('');
			$table->text('description')->default('');
			$table->integer('createUserId')->default('');
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
		Schema::drop('properties');
	}

}
