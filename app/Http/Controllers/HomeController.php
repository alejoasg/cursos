<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
