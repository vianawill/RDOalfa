<?php

namespace App\Http\Controllers;

use App\Models\Rdo;
use App\Models\Obra;
use App\Models\Equipamento;
use App\Models\MaoObra;
use Illuminate\Http\Request;

class RdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rdos = Rdo::all();
        return view('rdos.index', compact('rdos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obras = Obra::all();  // Recupera todas as obras
        $equipamentos = Equipamento::all();  // Recupera todos os equipamentos
        $maoObras = MaoObra::all();  // Recupera toda a mão de obra

        return view('rdos.create', compact('obras', 'equipamentos', 'maoObras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'numero_rdo' => 'required|string|max:255',
            'data' => 'required|date',
            'obra_id' => 'required|exists:obras,id',
            'dia_da_semana' => 'required|string|max:255',
            'manha' => 'required|string|max:255',
            'tarde' => 'required|string|max:255',
            'noite' => 'required|string|max:255',
            'condicao_area' => 'required|string|max:255',
            'acidente' => 'required|string|max:255', // Validação para acidente
            'equipamentos' => 'array|exists:equipamentos,id', // validação para IDs de equipamentos
            'mao_obras' => 'array|exists:mao_obras,id', // validação para IDs de mão de obras
        ]);
        
        // Criação do RDO
        $rdo = Rdo::create($validatedData);

        // Relacionar equipamentos ao RDO
        $rdo->equipamentos()->sync($request->equipamentos);

        // Relacionar mão de obra ao RDO
        $rdo->maoObras()->sync($request->mao_obras);

        return redirect()->route('rdos.index');

        /* outra sugestão
         $validated = $request->validate([
            'obra_id' => 'required|exists:obras,id',
            'equipamentos' => 'array|required',
            'mao_obras' => 'array|required',
        ]);

        // Criação do RDO
        $rdo = Rdo::create([
            'obra_id' => $validated['obra_id'],
        ]);

        // Associar os equipamentos
        $rdo->equipamentos()->attach($validated['equipamentos']);

        // Associar as mãos de obra
        $rdo->maoObras()->attach($validated['mao_obras']);
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rdo  $rdo
     * @return \Illuminate\Http\Response
     */
    public function show(Rdo $rdo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rdo  $rdo
     * @return \Illuminate\Http\Response
     */
    public function edit(Rdo $rdo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rdo  $rdo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rdo $rdo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rdo  $rdo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rdo $rdo)
    {
        //
    }
}
