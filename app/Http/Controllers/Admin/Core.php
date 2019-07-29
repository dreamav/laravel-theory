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
		
		//$user = User::find(1);
		
		
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
		
		//$articles = Article::all();
		
		///$users = User::with('articles','roles')->get();
		
		
		//$users = User::has('articles','>=','3')->get();
		
		//kod
		
		//kod
		
		//User
		//$articles = Article::with('user')->get();
		
		//$articles->load('user');
		
		/*foreach($users as $user) {
			dump($user);
		}*/
		
		//dump($articles);
		
		
		$user = User::find(1);
		
		/*$article = new Article([
								
								'name' => 'New Article',
								'text' => 'Some text'
								
								]);*/
		
		$user->articles()->where('id',24)->update(['name'=>'NEW TEXT2222222']);
		
		/*$role = new Role(['name'=>'quest']);
		$user->roles()->save($role);*/
		
		/*$user->articles()->saveMany([
									
									new Article(['name' => 'New Article1', 'text' => 'Some text1']),
									new Article(['name' => 'New Article2', 'text' => 'Some text2']),
									new Article(['name' => 'New Article3', 'text' => 'Some text3']),
									
									]);*/
		
		/*$user->articles()->create([
								
								'name' => 'New Article1',
								'text' => 'Some text1'
								
								]);*/
		
		
		$articles = Article::find(24);
		dump($articles);
		
		return ;
		
	}
	
	 //material
    public function getArticle($id) {
		
		echo 'Ответ - '.$id;
	}
}
