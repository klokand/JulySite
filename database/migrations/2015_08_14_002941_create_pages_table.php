<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sliderImage1')->default('slider.jpg');
			$table->string('caption1')->default('This is the Slider');
			$table->string('slider1_link')->default('#');
			$table->string('sliderImage2')->default('slider.jpg');
			$table->string('caption2')->default('This is the Slider');
			$table->string('slider2_link')->default('#');
			$table->string('sliderImage3')->default('slider.jpg');
			$table->string('caption3')->default('This is the Slider');
			$table->string('slider3_link')->default('#');
			$table->string('project1')->default('project.jpg');
			$table->string('project1_text')->default('This is the default project summary');
			$table->string('project2')->default('project.jpg');
			$table->string('project2_text')->default('This is the default project summary');
			$table->string('project3')->default('project.jpg');
			$table->string('project3_text')->default('This is the default project summary');
			$table->string('project4')->default('project.jpg');
			$table->string('project4_text')->default('This is the default project summary');
			$table->string('project5')->default('project.jpg');
			$table->string('project5_text')->default('This is the default project summary');
			$table->string('download_offer')->default('');
			$table->string('team_memeber1')->default('mark');
			$table->string('team_memeber1_position')->default('CEO');
			$table->text('team_memeber1_summary')->default('');
			$table->string('team_memeber1_image')->default('team.jpg');
			$table->string('team_memeber2')->default('mark');
			$table->string('team_memeber2_position')->default('CEO');
			$table->text('team_memeber2_summary')->default('');
			$table->string('team_memeber2_image')->default('team.jpg');
			$table->text('quote')->default('');
			$table->string('quote_author')->default('Donald Horne');
			$table->string('quote_image')->default('quote.jpg');
			$table->string('partnership')->default('partnership.jpg');
			$table->string('footer_company')->default('LUCKY COUNTRY PROPERTY INVESTMENTS PTY LTD.(ABN:38 605 613 009) is an Australian Proprietary Company');
			$table->string('footer_trademark')->default('LUCKY COUNTRY PROPERTY INVESTMENTS PTY LTD');
			$table->text('aboutus')->default('');
			$table->text('mission')->default('');
			$table->string('location')->default('No.9 , the example road, NORTH BEACH West Australia 6020');
			$table->string('telephone')->default('999 999 9999');
			$table->string('email')->default('');
			$table->string('query_email')->default('');
			$table->string('query_email_p')->default('');
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
		Schema::drop('pages');
	}

}
