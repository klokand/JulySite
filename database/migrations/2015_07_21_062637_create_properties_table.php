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
			$table->enum('type',['House','Unit','Land','Apartment','Town House','Home Land Package','Display Home','Off-the-plan','Completed Units']);
			$table->string('address')->default('');
			$table->string('price')->default('');
			$table->enum('state',['step1','available','sold','underContract','unavailable'])->default('step1');
			$table->string('bedNo')->default('');
			$table->string('bathNo')->default('');
			$table->string('garageCarNo')->default('');
			$table->string('landSize')->default('');
			$table->string('buildingSize')->default('');
			$table->text('description')->default('');
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
