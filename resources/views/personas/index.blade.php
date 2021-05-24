@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">                
                    <a class="btn btn-primari" href="{{route('personas.create')}}"> agregar</a>

                    <hr>
                    <table class="table table-dark">

                    <tr>
                        <td>ID</td>
                        <td>NOMBRE</td>
                        <td>SEXO</td>
                        <td>DOCUMENTO</td>
                    </tr>
                    @foreach ($personas as $persona)
                    <tr>
                    
                        <td>{{ $persona->id }}</td>
                        <td>{{ $persona->nombrePersona }}</td>

                        <?php
                        foreach($personas as $p){
                            foreach($sexo as $s){
                                if ($p->idSexo == $s->id) {
                                    $nombreSexo=$s->nombreSexo;
                                }
                            }
                            foreach($documento as $d){
                                if ($p->idTipoDocumento  == $d->id) {
                                    $nombreDocumento=$d->nombreDocumento;
                                }
                            }
                            
                        }
                        ?>
                        <td>{{ $nombreSexo  }}</td>
                        <td>{{ $nombreDocumento  }}</td>
                        <td><a href="{{route('personas.edit',$persona->id)}}" class="btn btn-info">Editar</a></td>
                        
                        <td><form action="{{route('personas.destroy',$persona->id)}}" method="post">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="eliminar">
                        </form></td>
                        
                     
                   
                       
                    </tr>
                     @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
