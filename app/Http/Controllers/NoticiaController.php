<?php

namespace App\Http\Controllers
;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
   public function index(){
   		$nombre="Jhon Medina";
   		$edad="25";
   		return view('noticia', compact('nombre','edad'));
   }

   public function nosotros(){
   		return "ola chavo";
   }

   public function nueva(){
   		return view('crear_noticia');
   }

   public function crear(Request $request){
   		\App\Noticia::create([
   			'titulo'=> $request['titulo'],
   			'contenido'=> $request['contenido']
   		]);

   		return redirect('/');
   }
}
