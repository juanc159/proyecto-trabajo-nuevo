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

                    <div class="form-group">
                        <label for="nombre">Nombre de la Persona</label>
                        <input class="form-control" type="text" name="nombre" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="nombre">Sexo de la Persona</label>
                        <select class="form-control" name="sexo" id="sexo">
                            @foreach ($sexo as $s)
                                <option value="{{ $s->id }}">{{ $s->nombreSexo }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <br>
                    <div class="form-group">
                        <label for="documento">Tipo de Documento</label>
                        <select class="form-control" name="documento" id="documento">
                            @foreach ($documento as $d)
                                <option value="{{ $d->id }}">{{ $d->nombreDocumento }}</option>
                            @endforeach
                       </select>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" value="CREAR">
                    <a class="btn btn-danger" href="{{route('personas.index')}}">CANCELAR</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection