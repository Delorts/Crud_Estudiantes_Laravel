@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{Session::get('mensaje')}}
@endif
<!-- <form class="d-flex" action="{{route('estudiante.index')}}" method="GET">
      <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscardor">
      <input type="submit" value="Buscar">
      <hr>
</form> -->
<form method="GET" action="{{ route('estudiante.index') }}">
    <input type="text" name="busqueda" value="{{ $busqueda }}" placeholder="Buscar...">
    <button type="submit">Buscar</button>
</form>
<br>
<a href="{{url('estudiante/create')}}" class="btn btn-success"  >Registrar un nuevo estudiante</a>
<br>
<br>
<table class="table table-striped table-dark table_id">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Cedula</th>
            <th>Fecha_de_Nacimiento</th>
            <th>Cod_Numero</th>
            <th>Numero</th>
            <th>Correo</th>
            <th>Materia_1</th>
            <th>Materia_2</th>
            <th>Materia_3</th>
            <th>Materia_4</th>
            <th>Materia_5</th>
            <th>Estado</th>
            <th>ciudad</th>
            <th>Municipio</th>
            <th>Direccion</th>
            <th>Acciones</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach($estudiantes as $estudiante)
        <tr>
            <td>{{$estudiante->id}}</td>
            <td>
                <img src="{{asset('storage').'/'.$estudiante->Foto}}" class="img-thumbnail img-fluid" width="100"  alt="">
                

            </td>
            <td>{{$estudiante->Nombre}}</td>
            <td>{{$estudiante->Apellido}}</td>
            <td>{{$estudiante->Cedula}}</td>
            <td>{{$estudiante->Fecha_de_Nacimiento}}</td>
            <td>{{$estudiante->Cod_Numero}}</td>
            <td>{{$estudiante->Numero}}</td>
            <td>{{$estudiante->Correo}}</td>
            <td>{{$estudiante->Materias}}</td>
            <td>{{$estudiante->Materia_2}}</td>
            <td>{{$estudiante->Materia_3}}</td>
            <td>{{$estudiante->Materia_4}}</td>
            <td>{{$estudiante->Materia_5}}</td>
            <td>{{$estudiante->Estado}}</td>
            <td>{{$estudiante->Ciudad}}</td>
            <td>{{$estudiante->Municipio}}</td>
            <td>{{$estudiante->Direccion}}</td>
            <td>
                <a href="{{url('/estudiante/'.$estudiante->id.'/edit')}}" >
                    Editar
                </a>
                 | 
                <form action="{{url('/estudiante/'.$estudiante->id)}}"  method="post">
                    @csrf 
                    {{method_field('DELETE')}}
                    <input type="submit"  onclick="return confirm('Deseas Borrar?')" value="Borrar">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            
        </tr>
    </tfoot>
</table>
</div>

@endsection