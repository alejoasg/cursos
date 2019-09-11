<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
    public function index()
    {
        $lists = array(['name'=>"Alex",'verdadero'=>"Es profesor"],['name'=>"Pepe",'verdadero'=>"No es profesor"]);
        return view('teacher')->with(compact('lists'));
    }
}
