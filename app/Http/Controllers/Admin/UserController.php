<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = user::all();
        return view('admin.users.user')->with(compact('users'));
    }

    public function store(Request $request)
    {
        $rules= [
            'nombre'=> 'required',
            'apellido'=> 'required',
            'nick'=> 'required',
            'activo'=> 'required',
            'correo'=> 'required',
            'dni'=> 'required',
            'telefono'=> 'required',
            'password'=> 'required'
        ];

        $messages=['nombre.required'=> 'El nombre del curso es requerido.',
            'apellido.required'=> 'El apellido es requerido.',
            'nick.required'=> 'El nick es requerido.',
            'activo.required'=> 'El usuario activo es requerido.',
            'correo.required'=> 'El correo es requerido.',
            'dni.required'=> 'El DNI es requerido.',
            'telefono.required'=> 'El teléfono es requerido.',
             'password.required'=> 'La contraseña  es requerida.'
             ];
        $this->validate($request, $rules,$messages);
        dd($request->all());
        return back();
    }

    public function edit($id)
    {
        $user=User::find($id);
        $users = user::all();
        return view('admin.users.edit')->with(compact('user','users'));
    }

    public function update()
    {
        return back();
    }

}
