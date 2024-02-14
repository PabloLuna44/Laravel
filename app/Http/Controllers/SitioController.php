<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class SitioController extends Controller
{
   public function info($tipo=null){
    
        //get('/information/{tipo}' es oblogatorio poner la variable
        //get('/information/{tipo?}' no es oblogatorio poner la variable
    
        return view('information',compact('tipo'));//contact para mandar variable a la vista

   }


   

   




}
