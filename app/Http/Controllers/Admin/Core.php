<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

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
    public function getArticles() {
		
		//$articles = DB::table('articles')->get();
		//$articles = DB::table('articles')->first();
		//$articles = DB::table('articles')->value('name');
		
		/*DB::table('articles')->chunk(2,function($articles) {
			
			foreach($articles as $article) {
				Core::addArticles($article);
			}
			
		});
		
		dump(self::$articles);*/
		
		//$articles = DB::table('articles')->pluck('name');
		//$articles = DB::table('articles')->count();
		//$articles = DB::table('articles')->max('id');
		
		
		//$articles = DB::table('articles')->select('name','id','text')->get();
		//$articles = DB::table('articles')->distinct()->select('name')->get();
		
		
		///$query = DB::table('articles')->select('name');
		////
		
		////
		
		///WHERE
		//$articles = $query->addSelect('text AS fulltext')->get();
		
		//WHERE id = 5
	/*$articles = DB::table('articles')->select('name','text AS fulltext')
													->where('id','>',5)
													->where('name','like','test%','or')
													->orWhere('id','<',2)
													->get();*/
													
		//where id between 1 and 5											
		/*$articles = DB::table('articles')->whereNotBetween('id',[1,5])->get();*/
		
		//$articles = DB::table('articles')->whereNotIn('id',[1,2,3,5])->get();
		
		//$articles = DB::table('articles')->groupBy('name')->get();
		
		//limit
		//$articles = DB::table('articles')->take(4)->skip(2)->get();
		
		// INSERT INTO
		/*DB::table('articles')->insert(
										
										[
										    ['name' => 'Test2', 'text' => 'hello'],
										    ['name' => 'Test3', 'text' => 'hello world'],
										    ['name' => 'Test2', 'text' => 'hello'],
										    ['name' => 'Test3', 'text' => 'hello world'],
										    ['name' => 'Test2', 'text' => 'hello'],
										    ['name' => 'Test3', 'text' => 'hello world']
										]
										
										);*/
		
		//$result = DB::table('articles')->insertGetId(['name' => 'Test2', 'text' => 'hello']);								
		
		//dump($result);
		
		// where id = 22
		//$result = DB::table('articles')->where('id',22)->update(['name'=>'Hello world1']);
		
		$result = DB::table('articles')->where('id',22)->delete();
		
		//
/*		LEFT JOIN 'articles' ON user.id = articles.id
		$users = DB::table('users')
            ->leftJoin('articles', 'user.id', '=', 'articles.id')
            ->select()
            ->get();
		*/
		
		DB::table('articles')->decrement('name', 5);
		//dump($result);
		$articles = DB::table('articles')->get();
		dump($articles);
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
