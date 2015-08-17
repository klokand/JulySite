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
			$table->string('sliderImage1')->default('slider1');
			$table->string('caption1')->default('This is the Slider');
			$table->string('slider1_link')->default('#slider1');
			$table->string('sliderImage2')->default('slider1');
			$table->string('caption2')->default('This is the Slider');
			$table->string('slider2_link')->default('#slider2');
			$table->string('sliderImage3')->default('slider3');
			$table->string('caption3')->default('This is the Slider');
			$table->string('slider3_link')->default('slider3');
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
			$table->string('team_member1_name')->default('');
			$table->string('team_member1_position')->default('');
			$table->text('team_member1_summary')->default('');
			$table->string('team_member1_image')->default('');
			$table->string('team_member2_name')->default('');
			$table->string('team_member2_position')->default('');
			$table->text('team_member2_summary')->default('');
			$table->string('team_member2_image')->default('');
			$table->string('team_member3_name')->default('');
			$table->string('team_member3_position')->default('');
			$table->text('team_member3_summary')->default('');
			$table->string('team_member3_image')->default('');
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
			$table->string('location_image')->default('');
			$table->string('query_email')->default('');
			$table->string('query_email_p')->default('');
			$table->timestamps();
		});
		DB::table('pages')->insert(
        array(
            'id' => '1',
        )
    );
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
