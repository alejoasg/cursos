<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function cursos() {
        return view('course');
    }

    public function alumnos() {

        $lists = array(['name'=>"Lachy",'verdadero'=>"Es alumno"],['name'=>"segundo",'verdadero'=>"No es alumno"]);
        return view('student')->with(compact('lists'));
    }

    public function equipos() {
        return view('device');
    }

    public function aulas() {
        return view('class');
    }

    public function postcursos(Request $request) {

        $rules= [
            'nombre'=> 'required',
            'description'=> 'required|min:15',
            'cant_horas'=> 'required',
            'fecha_inicio'=> 'required',
            'fecha_final'=> 'required|after:fecha_inicio',
        ];

        $messages=['nombre.required'=> 'El nombre del curso es requerido.',
                   'description.min'=> 'La descripcion del curso debe tener minimo 15 carácteres.',
            'cant_horas.required'=> 'La cantidad de horas del cursoes requerida.',
            'fecha_inicio.required'=> 'La fecha de inicio del curso es requerida.',
            'fecha_final.required'=> 'La fecha final del curso es requerida.',
            'fecha_final.after'=> 'La fecha final del curso debe ser mayor que la fecha inicial.'];


        $this->validate($request, $rules ,$messages);
        $course= new Courses();
        $course->name= $request->input('nombre');
        $course->description= $request->input('description');
        $course->course_hours= $request->input('cant_horas');
        $course->start_date= $request->input('fecha_inicio');
        $course->end_date= $request->input('fecha_final');
        $course->save();

        return back();
       // return dd($request->all());
    }

    public function  listcursos()
    {
        $lists = Courses::all();
        return view('listcourse')->with(compact('lists'));
    }
}
