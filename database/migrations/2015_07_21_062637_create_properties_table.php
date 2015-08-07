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
			$table->string('name')->default('');
			$table->enum('type',['house','unit','land','apartment','town house']);
			$table->string('address')->default('');
			$table->string('price')->default('');
			$table->enum('state',['available','sold','underContract'])->default('available');
			$table->string('bedNo')->default('');
			$table->string('bathNo')->default('');
			$table->string('garageCarNo')->default('');
			$table->string('landSize')->default('');
			$table->string('buildingSize')->default('');
			$table->string('floorPlan')->default('');
			$table->text('summary')->default('');
			$table->text('description')->default('');
			$table->text('featureList')->default('');
			$table->string('createUserId')->default('');
			$table->string('coverImage')->default('property-default.jpg');
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
