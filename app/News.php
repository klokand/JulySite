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
		'coverImage'=>'required|min:2',
	);
	public function scopeNews($query){
		return $query->where('types','=','news')->orderBy('created_at', 'asc');
	}
	public function scopeDevelopment($query){
		return $query->where('types','=','development')->orderBy('created_at', 'desc');
	}
}
