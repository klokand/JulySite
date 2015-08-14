<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $fillable = array();
	
	public static $slider_rules=array(
		'slider1_link' =>'sometimes|url',
		'sliderImage1'=>'sometimes|mimes:jpeg',
		'slider2_link' =>'sometimes|url',
		'sliderImage2'=>'sometimes|required|image',
		'slider3_link' =>'sometimes|url',
		'sliderImage3'=>'sometimes|required|image',
	);
}
