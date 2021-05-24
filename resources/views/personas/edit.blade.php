@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">CREAR PERSONAS</div>

                <div class="card-body">                
                    <form action="{{route('personas.update',$persona->id)}}" method="post">
                    @csrf 
                    @method('put')

                    <div class="form-group">
                        <label for="nombre">Nombre de la Persona</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$persona->nombrePersona}}">
                    </div>


                    <?php
                            foreach($sexo as $s){
                                if ($s->id  == $persona->idSexo) {
                                    $nombreSexo=$s->nombreSexo;
                                }
                            }
                            foreach($documento as $d){
                                if ($d->id  ==$persona->idTipoDocumento) {
                                    $nombreDocumento=$d->nombreDocumento;
                                }
                            }
                            
                        
                        ?>


                    <div class="form-group">
                        <label for="nombre">Sexo de la Persona</label>
                        <select class="form-control" name="sexo" id="sexo">
                        <option value="{{$persona->idSexo}}">{{$nombreSexo}}</option>
                            @foreach ($sexo as $s)
                                <option value="{{ $s->id }}">{{ $s->nombreSexo }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    

                    <div class="form-group">
                        <label for="documento">Tipo de Documento</label>
                        
                        <select class="form-control" name="documento" id="documento">
                        <option value="{{$persona->idTipoDocumento}}">{{$nombreDocumento}}</option>
                            @foreach ($documento as $d)
                                <option value="{{ $d->id }}">{{ $d->nombreDocumento }}</option>
                            @endforeach
                       </select>
                    </div>
                    <div class="my-5">
                    <input class="btn btn-primary" type="submit" value="EDITAR">
                    <a class="btn btn-danger" href="{{route('personas.index')}}">CANCELAR</a>
                    </div>
                    
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection