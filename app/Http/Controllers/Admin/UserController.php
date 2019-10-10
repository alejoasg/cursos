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
            'correo'=> 'required',
            'dni'=> 'required',
            'telefono'=> 'required',
            'password'=> 'required'
        ];

        $messages=['nombre.required'=> 'El nombre del curso es requerido.',
            'apellido.required'=> 'El apellido es requerido.',
            'nick.required'=> 'El nick es requerido.',
            'correo.required'=> 'El correo es requerido.',
            'dni.required'=> 'El DNI es requerido.',
            'telefono.required'=> 'El teléfono es requerido.',
             'password.required'=> 'La contraseña  es requerida.'
             ];
        $this->validate($request, $rules,$messages);
        $user=new User();
        $user->name= $request->input('nombre');
        $user->last_name= $request->input('apellido');
        $user->nick= $request->input('nick');
        $user->email= $request->input('correo');
        $user->dni= $request->input('dni');
        $user->phone_number= $request->input('telefono');
        $user->password= $request->input('password');
        $user->save();
        return back();
    }

    public function edit($id)
    {
        $user=User::find($id);
        $users = user::all();
        return view('admin.users.edit')->with(compact('user','users'));
    }

    public function update($id,Request $request)
    {
        $rules= [
            'nombre'=> 'required',
            'apellido'=> 'required',
            'nick'=> 'required',
            'correo'=> 'required',
            'dni'=> 'required',
            'telefono'=> 'required'
        ];

        $messages=['nombre.required'=> 'El nombre del curso es requerido.',
            'apellido.required'=> 'El apellido es requerido.',
            'nick.required'=> 'El nick es requerido.',
            'correo.required'=> 'El correo es requerido.',
            'dni.required'=> 'El DNI es requerido.',
            'telefono.required'=> 'El teléfono es requerido.'

        ];
        $this->validate($request, $rules,$messages);
        $user=User::find($id);
        $user->name= $request->input('nombre');
        $user->last_name= $request->input('apellido');
        $user->nick= $request->input('nick');
        $user->email= $request->input('correo');
        $user->dni= $request->input('dni');
        $user->phone_number= $request->input('telefono');
        $password= $request->input('password');
        if($password)
        {
            $user->password=bcrypt($password);
        }
        $user->save();
        return back()->with('notification','Usuario modificado exitosamente.');
    }
    public function delete($id)
    {
        $user=User::find($id);
        $user->delete();
        return back()->with('notification','Usuario eliminado exitosamente.');
    }


}
