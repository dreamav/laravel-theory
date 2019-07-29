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
	
		
		/*Article::create(
						[
							'name'=>'Hello world',
							'text'=>'Some Text'
						]
						);*/
		
		
		/*$article = Article::firstOrCreate([
								
										'name'=>'Hello world1',
										'text'=>'Some Text'
										
										]);*/
		
		/*$article = Article::firstOrNew([
							
										'name'=>'Hello world2',
										'text'=>'Some Text'
										
										]);
		$article->save();						*/		
										
		
		
		//$article = Article::find(35);
		
		//$article->delete();
		
		//Article::destroy([33,32]);
		
		//Article::where('id','>','3')->delete();
		
		
		/*$article = Article::find(3);
		
		$article->delete();*/
		
		
		//$articles = Article::onlyTrashed()->restore();
		
		/*foreach($articles as $article) {
			if($article->trashed()) {
				echo $article->id.' Удалена<br />';
				$article->restore();
			}
			else {
				echo $article->id.' Не удалена<br />';
			}
		}*/
		
		//$article = Article::find(3);
		
		//$article->forceDelete();
		
		//dump($articles);
		//dump($article);
		
		return ;
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
