<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function show() {

//    	view('welcome');

      // $data = array('title' => 'Hello World', 'title2' => 'Hello world 3');
      // return view('default.template', $data);//key=>value
		
		
		// $view = view('default.template');
		
		// $view->with('title','Hello World 2');
		// $view->with('title2','Hello World 3');
		// $view->with('title3','Hello World 4');

  //   return $view;
		
		if(view()->exists('default.template')) {
			
			// view()->name('default.template','myview');
			// return view()->of('myview')->withTitle('Hello World');
			
			
			$view = view('default.template',['title'=>'Hello World'])->render();
			echo view('default.template',['title'=>'Hello World'])->getPath();
//			echo $view;
			return;
			
			// $path = config('view.paths');
			// return view()->file($path[0].'/default/template.php')->withTitle('Hello World');;
			// return view('default.template')->withTitle('Hello World');
		}
		
		abort(404);
		
		
	}
}
