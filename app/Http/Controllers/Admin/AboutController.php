<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    //
    
    public function show() {
		
		if(view()->exists('default.about')) {	
		
	//$artiles = DB::select("SELECT * FROm `articles` WHERE id = :id",['id'=>2]);
	
	DB::insert("INSERT INTO `articles` (`name`,`text`) VALUES (?, ?)", ['test 1','TEXT']);
	
	//$result = DB::connection()->getPdo()->lastInsertId();
	
//$result = DB::update('UPDATE  `articles` SET `name` = ? WHERE `id` = ?', ["TEST 2",6]);
//$result = DB::update('UPDATE  `articles` SET `name` = ? WHERE `id` = ?', ["TEST 3",6]);

	//$result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', [6]);
			
			//DB::statement('DROP table `articles`');
			
			$artiles = DB::select("SELECT * FROm `articles");
			
			//dump($result);
			dump($artiles);	//dd()	
			
			foreach($artiles as $article) {
				
			}
			return view('default.about')->withTitle('Hello World');			
			
		}
		abort(404);
	}
    
}
