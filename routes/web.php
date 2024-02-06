<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/information/{tipo?}', function($tipo=null) {
    //get('/information/{tipo}' es oblogatorio poner la variable
    //get('/information/{tipo?}' no es oblogatorio poner la variable

    return view('information',compact('tipo'));//contact para mandar variable a la vista

});

Route::get('/contacto', function(){
    return view('contacto');
});


Route::post('/contacto',function(Request $request){
dd($request->all(),$request->nombre,$request->input('email'));//Para obtener todo o cierto campo del post


//Validar datos


//Guardar Datps 

//redireccionar


    return 'HOLA POST';

});



