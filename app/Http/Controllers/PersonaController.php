<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use App\Models\Sexo;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Personas::all();
        //
        $sexo = Sexo::all();
        $documento = TipoDocumento::all();

        return view('personas.index',compact('personas','sexo','documento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sexo = Sexo::all();
        $documento = TipoDocumento::all();
        return view('personas.create', compact('sexo','documento'));
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
        $persona =  new Personas ;
        $persona->nombrePersona = $request->nombre;
        $persona->idSexo  = $request->sexo;
        $persona->idTipoDocumento  = $request->documento;

        $persona->save();
        return redirect('personas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $persona =   Personas::find($id) ;
        $sexo = Sexo::all();
        $documento = TipoDocumento::all();

        


        return view('personas.edit',compact('persona','sexo','documento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $persona =  Personas::find($id) ;
        $persona->nombrePersona = $request->nombre;
        $persona->idSexo  = $request->sexo;
        $persona->idTipoDocumento  = $request->documento;
        $persona->update();
        return redirect('personas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $persona =  new Personas ;
        $persona->destroy($id);
        return redirect('personas');
    }
}
