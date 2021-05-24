@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">CREAR PERSONAS</div>

                <div class="card-body">                
                    <form action="{{route('personas.store')}}" method="post">
                    @csrf 
                    
                    <label for="nombre">Nombre
                        <input type="text" name="nombre" id="nombre">
                    </label><br> 
                    <label for="sexo">Sexo
                        <select name="sexo" id="sexo">
                        @foreach ($sexo as $s)
                        <option value="{{ $s->id }}">{{ $s->nombreSexo }}</option>
                    @endforeach
                        
                        </select>
                    </label>
                    <br>
                    <label for="documento">Tipo de Documento
                        <select name="documento" id="documento">
                        @foreach ($documento as $d)
                        <option value="{{ $d->id }}">{{ $d->nombreDocumento }}</option>
                        @endforeach
                       </select>
                    </label>
                    <br>
                    <input type="submit" value="CREAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection