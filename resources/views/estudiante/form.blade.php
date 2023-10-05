    <h1>{{$modo}} Estudiante</h1>


    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>

    </div>
    @endif


    <div class="form-group">
    <label for="Nombre">Nombre</label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($estudiante->Nombre)?$estudiante->Nombre:old('Nombre')}}" id="Nombre">
    
    </div>

    <div class="form-group">
    <label for="Apellido">Apellido</label>
    <input type="text" class="form-control" name="Apellido" value="{{isset($estudiante->Apellido)?$estudiante->Apellido:old('Apellido')}}" id="Apellido">
    
    </div>

    <div class="form-group">
    <label for="Cedula">Cedula</label>
    <input type="number" class="form-control" name="Cedula" value="{{isset($estudiante->Cedula)?$estudiante->Cedula:old('Cedula')}}" id="Cedula">
    
    </div>

    <div class="form-group">
    <label for="Numero">Numero</label>
    <select class="form-select form-select-lg form-select-outline" name="Cod_Numero" id="Cod_Numero">
        <option value="412">412</option>
        <option value="414">414</option>
        <option value="416">416</option>
        <option value="424">424</option>
        
    </select>
    <input type="number" class="form-control" name="Numero" value="{{isset($estudiante->Numero)?$estudiante->Numero:old('Numero')}}" id="Numero">
    
    </div>

    <div class="form-group">
    <label for="Correo">Correo</label>
    <input type="text" class="form-control" name="Correo" value="{{isset($estudiante->Correo)?$estudiante->Correo:old('Correo')}}" id="Correo">
    
    </div>

    <div class="form-group">
    <label for="Fecha_de_Nacimiento">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="Fecha_de_Nacimiento" min="1960-01-01" max="2023-06-17" value="{{isset($estudiante->Fecha_de_Nacimiento)?$estudiante->Fecha_de_Nacimiento:old('Fecha_de_Nacimiento')}}"  id="Fecha_de_Nacimiento">
    
    </div>

    <div class="form-group">
    <label for="Estado">Estado</label>
    <input type="text" class="form-control" name="Estado" value="{{isset($estudiante->Estado)?$estudiante->Estado:old('Estado')}}" id="Estado">
    
    </div>

    <div class="form-group">
    <label for="Ciudad">Ciudad</label>
    <input type="text" class="form-control" name="Ciudad" value="{{isset($estudiante->Ciudad)?$estudiante->Ciudad:old('Ciudad')}}" id="Ciudad">
    
    </div>

    <div class="form-group">
    <label for="Municipio">Municipio</label>
    <input type="text" class="form-control" name="Municipio" value="{{isset($estudiante->Municipio)?$estudiante->Municipio:old('Municipio')}}" id="Municipio">
    
    </div>

    <div class="form-group">
    <label for="Direccion">Direccion</label>
    <input type="text" class="form-control" name="Direccion" value="{{isset($estudiante->Direccion)?$estudiante->Direccion:old('Direccion')}}" id="Direccion">
    
    </div>
    <div class="form-group">
    <label for="Materias">Materias:</label>
    <select class="form-select form-select-lg form-select-outline" name="Materias" id="Materias">
        <option value="Lenguajes de Programa">Lenguajes de Programa</option>
        <option value="Programacion Matematica">Programacion Matematica</option>
        <option value="Traductores">Traductores</option>
        <option value="Sistemas Operativos">Sistemas Operativos</option>
        <option value="Sistemas de Bases de Datos">Sistemas de Bases de Datos</option>
        <option value="Programacion Web">Programacion Web</option>
    </select>
</div>
<div class="form-group">
    <label for="Materia_2">Materia 2:</label>
    <select class="form-select form-select-lg form-select-outline" name="Materia_2" id="Materia_2">
        <option value="Traductores">Traductores</option>
        <option value="Programacion Matematica">Programacion Matematica</option>
        <option value="Lenguajes de Programa">Lenguajes de Programa</option>
        <option value="Sistemas Operativos">Sistemas Operativos</option>
        <option value="Sistemas de Bases de Datos">Sistemas de Bases de Datos</option>
        <option value="Programacion Web">Programacion Web</option>
    </select>
</div>
<div class="form-group">
    <label for="Materia_3">Materia 3:</label>
    <select class="form-select form-select-lg form-select-outline" name="Materia_3" id="Materia_3">
        <option value="Programacion Web">Programacion Web</option>
        <option value="Programacion Matematica">Programacion Matematica</option>
        <option value="Lenguajes de Programa">Lenguajes de Programa</option>
        <option value="Traductores">Traductores</option>
        <option value="Sistemas Operativos">Sistemas Operativos</option>
        <option value="Sistemas de Bases de Datos">Sistemas de Bases de Datos</option>
    </select>
</div>
<div class="form-group">
    <label for="Materia_4">Materia 4:</label>
    <select class="form-select form-select-lg form-select-outline" name="Materia_4" id="Materia_4">
        <option value="Programacion Matematica">Programacion Matematica</option>
        <option value="Lenguajes de Programa">Lenguajes de Programa</option>
        <option value="Traductores">Traductores</option>
        <option value="Sistemas Operativos">Sistemas Operativos</option>
        <option value="Sistemas de Bases de Datos">Sistemas de Bases de Datos</option>
        <option value="Programacion Web">Programacion Web</option>
    </select>
</div>
<div class="form-group">
    <label for="Materia_5">Materia 5:</label>
    <select class="form-select form-select-lg form-select-outline" name="Materia_5" id="Materia_5">
        <option value="Sistemas de Bases de Datos">Sistemas de Bases de Datos</option>
        <option value="Programacion Matematica">Programacion Matematica</option>
        <option value="Lenguajes de Programa">Lenguajes de Programa</option>
        <option value="Traductores">Traductores</option>
        <option value="Sistemas Operativos">Sistemas Operativos</option>
        <option value="Programacion Web">Programacion Web</option>
    </select>
</div>

    <!-- <div class="form-group">
    <label for="Materias">Materias</label>
    <input type="text" class="form-control" name="Materias" value="{{isset($estudiante->Materias)?$estudiante->Materias:old('Materias')}}" id="Materias">
    
    </div>
    <div class="form-group">
    <label for="Materia_2">Materia 2</label>
    <input type="text" class="form-control" name="Materia_2" value="{{isset($estudiante->Materia_2)?$estudiante->Materia_2:old('Materia_2')}}" id="Materia_2">
    
    </div>
    <div class="form-group">
    <label for="Materia_3">Materia 3</label>
    <input type="text" class="form-control" name="Materia_3" value="{{isset($estudiante->Materia_3)?$estudiante->Materia_3:old('Materia_3')}}" id="Materia_3">
    
    </div>
    <div class="form-group">
    <label for="Materia_4">Materia 4</label>
    <input type="text" class="form-control" name="Materia_4" value="{{isset($estudiante->Materia_4)?$estudiante->Materias:old('Materia_4')}}" id="Materia_4">
    
    </div>
    <div class="form-group">
    <label for="Materia_5">Materia 5</label>
    <input type="text" class="form-control" name="Materia_5" value="{{isset($estudiante->Materia_5)?$estudiante->Materia_5:old('Materia_5')}}" id="Materia_5">
    
    </div> -->
    

    <div class="form-group">
    <label for="Foto">Foto</label>
    @if(isset($estudiante->Foto))
    <img class="img-thumbnail img-fluid" src="{{asset('storage').'/'.$estudiante->Foto}}" width="100" alt="">
    @endif
    <input type="file" class="form-control" name="Foto" value="" id="Foto">
    
    </div>

    <input type="submit" class="btn btn-success" value="{{$modo}} Estudiante">
    <a class="btn btn-primary" href="{{url('estudiante/')}}">Regresar</a>
   