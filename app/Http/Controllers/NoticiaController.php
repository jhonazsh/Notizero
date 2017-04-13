<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
   public function index(){
   		$nombre="Jhon Medina";
   		$edad="25";
   		return view('noticia', compact('nombre','edad'));
   }

   public function piura(){
   		return view('otra');
   }
}
