<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	protected $fillable = array();
	
	public static $slider_rules=array(
		'slider1_link' =>'sometimes|url',
		'sliderImage1'=>'sometimes|max:3000|image|mimes:jpeg,bmp,png',
		'slider2_link' =>'sometimes|url',
		'sliderImage2'=>'sometimes|image|mimes:jpeg,bmp,png',
		'slider3_link' =>'sometimes|url',
		'sliderImage3'=>'sometimes|image|mimes:jpeg,bmp,png',
	);
	public static $download_offer_rules=array(
		'download_offer'=>'sometimes|mimes:pdf',
	);
	public static $team_member1_rules=array(
		'team_member1_name'=>'sometimes|required|min:2',
		'team_member1_position'=>'sometimes|required|min:2',
		'team_member1_summary'=>'sometimes|required|min:5',
		'team_member1_image'=>'sometimes|required|image|mimes:jpeg,bmp,png',
	);
	public static $team_member2_rules=array(
		'team_member2_name'=>'sometimes|required|min:2',
		'team_member2_position'=>'sometimes|required|min:2',
		'team_member2_summary'=>'sometimes|required|min:5',
		'team_member2_image'=>'sometimes|required|image|mimes:jpeg,bmp,png',
	);
	public static $quote_rules=array(
		'quote_author'=>'sometimes|required|min:2',
		'quote'=>'sometimes|required|min:5',
		'quote_image'=>'sometimes|max:3000|required|image|mimes:jpeg,bmp,png',
	);
	public static $contact_rules=array(
		'location'=>'sometimes|required|min:2',
		'telephone'=>'sometimes|required|numeric|min:5',
		'email'=>'sometimes|required|email|min:5',
		'location_image'=>'sometimes|required|image|mimes:jpeg,bmp,png',
	);
}
