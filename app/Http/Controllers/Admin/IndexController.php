<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function show() {
		
		if(view()->exists('default.index')) {
			return view('default.index')->withTitle('Hello World');
		}
		abort(404);
	}
}
