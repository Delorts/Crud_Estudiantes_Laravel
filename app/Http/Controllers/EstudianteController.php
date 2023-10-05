<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    /*public function index(Request $request)
    {
        
        $datos['estudiantes']=Estudiante::paginate(15);
        return view('estudiante.index',$datos);
    }*/
    public function index(Request $request)
{
    $busqueda = $request->query('busqueda'); // Obtener el valor del parámetro "busqueda" de la solicitud

    $query = Estudiante::query(); // Crear una instancia de la consulta

    if ($busqueda) {
        // Si se proporciona un valor de búsqueda, agregar una condición a la consulta para filtrar los resultados
        $query->where('estado', 'LIKE', "%$busqueda%")
              ->orWhere('fecha_de_nacimiento', 'LIKE', "%$busqueda%")
              ->orWhere('cedula', 'LIKE', "%$busqueda%");
    }

    $estudiantes = $query->paginate(15); // Ejecutar la consulta y obtener los resultados paginados

    return view('estudiante.index', ['estudiantes' => $estudiantes, 'busqueda' => $busqueda]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $Campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Cedula'=>'required|integer|min:999999|max:99999999',
            'Numero' => 'required|integer|min:999999|max:9999999',
            'Correo'=>'required|email',
            'Fecha_de_Nacimiento'=>'required|string|max:100',
            'Estado'=>'required|string|min:5',
            'Municipio'=>'required|string|min:7',
            'Direccion'=>'required|string|min:15',
            'Materias'=>'string|max:100',
            'Materia_2'=>'string|max:100',
            'Materia_3'=>'string|max:100',
            'Materia_4'=>'string|max:100',
            'Materia_5'=>'string|max:100',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida'
        ];

        $this->validate($request,$Campos,$mensaje);

        $materias = '';
    if ($request->has('Materias')) {
        $materias .= $request->Materias . ', ';
    }
    if ($request->has('Materia_2')) {
        $materias .= $request->Materia_2 . ', ';
    }
    if ($request->has('Materia_3')) {
        $materias .= $request->Materia_3 . ', ';
    }
    if ($request->has('Materia_4')) {
        $materias .= $request->Materia_4 . ', ';
    }
    if ($request->has('Materia_5')) {
        $materias .= $request->Materia_5 . ', ';
    }
    $materias = rtrim($materias, ', ');




        //$Datos_Estudiante=request()->all();
        $Datos_Estudiante=request()->except('_token');

        if($request->hasFile('Foto')){
            $Datos_Estudiante['Foto']=$request->file('Foto')->store('uploads','public');
        }
        Estudiante::insert($Datos_Estudiante);
        //return response()->json($Datos_Estudiante);
        return redirect('estudiante')->with('mensaje','Estudiante agregado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $Campos=[
            'Nombre'=>'required|string|max:100',
            'Apellido'=>'required|string|max:100',
            'Cedula'=>'required|integer|min:999999|max:99999999',
            'Numero' => 'required|integer|min:999999|max:9999999',
            'Correo'=>'required|email',
            'Fecha_de_Nacimiento'=>'required|string|max:100',
            'Estado'=>'required|string|min:5',
            'Municipio'=>'required|string|min:7',
            'Direccion'=>'required|string|min:15',
            'Materias'=>'string|max:100',
            'Materia_2'=>'string|max:100',
            'Materia_3'=>'string|max:100',
            'Materia_4'=>'string|max:100',
            'Materia_5'=>'string|max:100',

        ];

        $mensaje=['required'=>'El :attribute es requerido'];

        if($request->hasFile('Foto')){
            $Campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];

        }


        $this->validate($request,$Campos,$mensaje);

        $materias = '';
    if ($request->has('Materias')) {
        $materias .= $request->Materias . ', ';
    }
    if ($request->has('Materia_2')) {
        $materias .= $request->Materia_2 . ', ';
    }
    if ($request->has('Materia_3')) {
        $materias .= $request->Materia_3 . ', ';
    }
    if ($request->has('Materia_4')) {
        $materias .= $request->Materia_4 . ', ';
    }
    if ($request->has('Materia_5')) {
        $materias .= $request->Materia_5 . ', ';
    }
    $materias = rtrim($materias, ', ');

        $Datos_Estudiante=request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $estudiante=Estudiante::findOrFail($id);
            Storage::delete('public/'.$estudiante->Foto);
            $Datos_Estudiante['Foto']=$request->file('Foto')->store('uploads','public');
        }


        Estudiante::where('id','=',$id)->update($Datos_Estudiante);
        $estudiante=Estudiante::findOrFail($id);
        return view('estudiante.edit', compact('estudiante'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $estudiante=Estudiante::findOrFail($id);
        if(Storage::delete('public/'.$estudiante->Foto)){
            Estudiante::destroy($id);
        }
        
        return redirect('estudiante')->with('mensaje','Estudiante Borrado');
    }
}