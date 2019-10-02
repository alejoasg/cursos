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
}
