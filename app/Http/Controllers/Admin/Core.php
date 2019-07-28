<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Core extends Controller {

  //list materials
  public function getArticles() {
    echo __METHOD__;
  }

  //material
  public function getArticle($id) {
    echo $id;
    echo __METHOD__;
  }
}
