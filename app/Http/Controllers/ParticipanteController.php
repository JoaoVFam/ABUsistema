<?php

namespace App\Http\Controllers;

use App\Participante;
use Illuminate\Http\Request;

class ParticipanteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaMigalhas = json_encode([
            ["titulo"=>"Home", "url"=>route('home')],
            ["titulo"=>"Lista de participantes", "url"=>""]
        ]);

        $listaArtigos = json_encode([
            ["id"=>1, "nome"=>"Roberto dos santos", "telefone"=>"59461984651"],
            ["id"=>2, "nome"=>"claudineia oliveira", "telefone"=>"1981168161"],
            ["id"=>3, "nome"=>"strugo alberto valter", "telefone"=>"123456789"],
            ["id"=>4, "nome"=>"dino campos da rocha barbado", "telefone"=>"946584651"]
            
        ]);

        return view('participantes.index', compact('listaMigalhas', 'listaArtigos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function show(Participante $participante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function edit(Participante $participante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participante $participante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        //
    }
}
