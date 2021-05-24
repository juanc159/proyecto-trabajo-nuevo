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
                    <label for="nombre">Nombre
                        <input type="text" name="nombre" id="nombre" value="{{$persona->nombrePersona}}">
                    </label><br> 
                    <label for="sexo">Sexo
                        <select name="sexo" id="sexo">
                        <option value="{{$persona->idSexo}}">{{$persona->idSexo}}</option>
                        @foreach ($sexo as $s)
                        <option value="{{ $s->id }}">{{ $s->nombreSexo }}</option>
                    @endforeach
                        
                        </select>
                    </label>
                    <br>
                    <label for="documento">Tipo de Documento
                        <select name="documento" id="documento">
                        <option value="{{$persona->idTipoDocumento}}">{{$persona->idTipoDocumento}}</option>
                        @foreach ($documento as $d)
                        <option value="{{ $d->id }}">{{ $d->nombreDocumento }}</option>
                        @endforeach
                       </select>
                    </label>
                    <br>
                    <input type="submit" value="EDITAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection