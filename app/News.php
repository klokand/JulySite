<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model {

	protected $fillable = array(
		'id','types','content','author','title','coverImage'
	);
	
	public static $news_rules = array(
		'types'=>'required|in:news,development',
		'content'=>'required|min:10',
		'author'=>'required|min:2',
		'title'=>'required|min:2',
		'coverImage'=>'required|image|max:2000',
	);
	public static $news_update_rules = array(
		'types'=>'required|in:news,development',
		'content'=>'required|min:10',
		'author'=>'required|min:2',
		'title'=>'required|min:2',
		'coverImage'=>'sometimes|image|max:2000',
	);
	
	public function scopeNews($query){
		return $query->where('types','=','news')->orderBy('created_at', 'desc');
	}
	public function scopeDevelopment($query){
		return $query->where('types','=','development')->orderBy('created_at', 'desc');
	}
}
