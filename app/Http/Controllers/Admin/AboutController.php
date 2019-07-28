<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class AboutController extends Controller
{
    //
    
    public function show() {
		
		//return 'hello';
		
		if(view()->exists('default.about')) {
			
			
			$view = view('default.about')->withTitle('Hello World')->render();
			/*return (new Response($view))
								->header('Content-Type','newType')
								->header('Header-One','header')
								;
								
			return response($view)->header('Content-Type','newType')
								->header('Header-One','header')
								;	*/	
			//return response()->json(['name'=>'Hello','name1'=>'Hello1']);								
			//return response()->view('default.about',['title'=>'hello world']);								
			
			///return response()->download('robots.txt','mytext.txt');								
			
			//return view('default.about')->withTitle('Hello World');
			
			/*return response($view)->withHeaders([
												
												'headerOne'=>'hello',
												'headerTwo'=>'hello',
												
												]);*/
			
			///return redirect('/articles')->withInput();		
			///return redirect('/articles')->with('param1','Hello');		
			//return redirect()->action('Admin\ContactController@show');		
			
			//return RedirectResponse::create('/articles');		
			
			return response()->myRes('hello world');					
			
		}
		abort(404);
	}
    
}
