<?php

namespace App\Http\Controllers;

use App\Models\Comentario;
use Illuminate\Http\Request;

class ComentarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comentarios= Comentario::all();
        return view('comentario/index',compact('comentarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comentario/contacto');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // dd($request->all(),$request->nombre,$request->input('email'));//Para obtener todo o cierto campo del post

        //Validar datos
        //Guardar Datos 

        $comentario = new Comentario();

        $comentario->nombre = $request->nombre;
        $comentario->email = $request->email;
        $comentario->comentario = $request->comentario;
        $comentario->ciudad = $request->ciudad;

        $comentario->save();


        //redireccionar


        return redirect('/comentario');
        // return redirect('/contacto');

    }

    /**
     * Display the specified resource.
     */
    public function show(Comentario $comentario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comentario $comentario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comentario $comentario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comentario $comentario)
    {
        //
    }
}
