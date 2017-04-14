<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	$noticias = \App\Noticia::all();
    	return view('index', compact('noticias'));
    }
}
