<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Article;

class Core extends Controller
{

    protected static $articles;
    
    
    public function __construct() {
		//$this->middleware('mymiddle');
	}
	
	public static function addArticles($array) {
		return self::$articles[] = $array;
	}
    
    //list materials
    public function getArticles(Request $request) {
		
		//$articles = DB::table('articles')->get();
		
		//$articles = Article::all();
		
		$articles = Article::where('id', '>', 3)->orderBy('name')->take(2)->get();
		
		/*Article::chunk(2, function($articles) {
			
			
		});*/
		
		//$article = Article::find(1);
		
		//$article = Article::where('id',1)->first();
		
		//$articles = Article::find([1,2,3]);
		
		//$article = Article::findOrFail(100);
		//$article = Article::where('id',100)->firstOrFail();
		
		
		/*$article = new Article;
		
		$article->name = 'New Article';
		$article->text = 'New Text';*/
		
		$article = Article::find(24);
		
		$article->name = 'New Name 2';
		$article->text = 'New Text 2';
		
		$article->save();
		
		
		//$article->name = 'New Article';
		//$article->text = 'New Text';
		
		//$article->save();
		
		
		/*foreach($articles as $article) {
			echo $article->text.'<br />';
		}*/
		//echo $article->text;
		
		$articles = Article::all();
		
		dump($articles);
		
		return ;
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
