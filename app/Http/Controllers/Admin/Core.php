<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Article;
use App\User;
use App\Country;
use App\Role;

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
		
		$user = User::find(1);



    dump($user->country);
		
		//$country = Country::find(1);
		
		///$article = Article::all();
		//$country = $user->country;
		
		
		///$articles = $user->articles()->where('id','>',24)->get();
		
		//$article = Article::find(24);
		
		/*foreach($articles as $article) {
			echo $article->name.'<br>';
		}*/
		
		//$user = User::find(1);
		
		
		//$role = $user->roles()->where('roles.id',2)->first();
		
		//$role = Role::find(1);
		
		//dump($role->users);
		
		/*foreach($user->roles as $role) {
			echo $role->name.'<br />';
		}*/
		
		return ;
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
