<?php

namespace App\Http\Controllers;

use App\Models\Biblioteca;
use App\Http\Requests\BibliotecaRequest;

class BibliotecaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return View('biblioteca.index')->with('BibliotecaCollection',Biblioteca::paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return View('biblioteca.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BibliotecaRequest $request)
    {
        $biblioteca = new Biblioteca();
        $biblioteca->titulo = $request->input('titulo');
        $biblioteca->autor = $request->input('autor');
        $biblioteca->sinopse = $request->input('sinopse');
        $biblioteca->genero = $request->input('genero');
        // Salve o material no banco de dados
        $biblioteca->save();
        return redirect('/bibliotecas');
    }


    /**
     * Display the specified resource.
     */
    public function show(Biblioteca $biblioteca)
    {
        //
        return View('biblioteca.show')->with('objetoBiblioteca', $biblioteca);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Biblioteca $biblioteca)
    {
        //
        return View('biblioteca.edit')->with('objetoBiblioteca', $biblioteca);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BibliotecaRequest $request, Biblioteca $biblioteca)
    {
        //
        $biblioteca->update($request->all());
        return redirect('/bibliotecas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bibliotecas $bibliotecas)
    {
        //
        $bibliotecas->delete();
        return redirect('/bibliotecass');
    }
}
