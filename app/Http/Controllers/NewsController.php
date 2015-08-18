<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use App\News;
use App\Page;

class NewsController extends Controller {

	 public function __construct()
    {
        $this->middleware('adminCheck',['except' => ['index', 'show','getDevelopments',]]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$page = Page::find(1);
		$news = News::news()->paginate(5);
		$newsTitles = News::news()->take(3)->get();
		return view('news')->with(['page'=>$page,'news'=>$news,'newsTitles'=>$newsTitles]);
	}
	
	public function getDevelopments(){
		$page = Page::find(1);
		$news = News::development()->paginate(2);
		return view('developments')->with(['page'=>$page,'news'=>$news]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.createNews')->with('pageName','Create news');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input,News::$news_rules);
		if($validation->passes()){
			if(Input::get('types')=='news'){
				$image = Input::file('coverImage');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(\Config::get('image.news_image_width'),\Config::get('image.news_image_height'))->save(\Config::get('image.news_image').$filename);
			}elseif(Input::get('types')=='development'){
				$image = Input::file('coverImage');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->save(\Config::get('image.news_image').$filename);
			}
			if($upload_success){
					News::create(array(
						'types'=>Input::get('types'),
						'author' => Input::get('author'),
						'content'=>Input::get('content'),
						'title'=>Input::get('title'),
						'coverImage'=>$filename,
					));
				return Redirect::to('admin/newsList');
				}
		}else{
			$error = $validation->errors()->first();
			return Redirect::to('news/create')->withInput(Input::all())->with(compact('error'));
		}	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{	
		$page = Page::find(1);
		$news = News::find($id);
		if($news->types=='news'){
			return view('newsDetail')->with(['page'=>$page,'news'=>$news]);
		}elseif($news->types=='development'){
			return view('developmentDetail')->with(['page'=>$page,'news'=>$news]);
		}
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$news = News::find($id);
		return view('admin.editorNews')->with(['news'=>$news,'pageName'=>'updateNews']);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		$news = News::find($id);
		$validation = Validator::make($input,News::$news_update_rules);
		if($validation->passes()){
			if(Input::get('types')=='news'){
			  if(Input::file('coverImage')!=null){
				$image = Input::file('coverImage');
				$extension = $image->getClientOriginalExtension();
				$filename = sha1(time().time()).".{$extension}";
				$upload_success=\Image::make($image)->resize(\Config::get('image.news_image_width'),\Config::get('image.news_image_height'))->save(\Config::get('image.news_image').$filename);
					if($upload_success){
					$news->types= Input::get('types');
					$news->author = Input::get('author');
					$news->content = Input::get('content');
					$news->title =Input::get('title');
					$news->coverImage =$filename;
					$news->save();
					return Redirect::to('admin/newsList');
					}
				}else{
					$news->types= Input::get('types');
					$news->author = Input::get('author');
					$news->content = Input::get('content');
					$news->title =Input::get('title');
					$news->save();
					return Redirect::to('admin/newsList');
					
				}
			}elseif(Input::get('types')=='development'){
				if(Input::file('coverImage')!=null){
					$image = Input::file('coverImage');
					$extension = $image->getClientOriginalExtension();
					$filename = sha1(time().time()).".{$extension}";
					$upload_success=\Image::make($image)->save(\Config::get('image.news_image').$filename);
					if($upload_success){
						$news->types= Input::get('types');
						$news->author = Input::get('author');
						$news->content = Input::get('content');
						$news->title =Input::get('title');
						$news->coverImage =$filename;
						$news->save();
						return Redirect::to('admin/newsList');
					}
				}else{
						$news->types= Input::get('types');
						$news->author = Input::get('author');
						$news->content = Input::get('content');
						$news->title =Input::get('title');
						$news->save();
						return Redirect::to('admin/newsList');
				}
				
			}
			
		}else{
			$error = $validation->errors()->first();
			return Redirect::back()->withInput(Input::all())->with(compact('error'));
		}	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
	
	public function listNews(){
		return view('admin.newsList')->with(['pageName'=>'All Sold Properties']);
	}

}
