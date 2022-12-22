<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retornar la vista para registrar usuarios(Solo administradores)
        return view('users.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ingresar los datos en la base de datos
        $this->validate($request, [
            'nombre' => 'required',
            'empresa' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);

        // MovimientoUsuario::create()

        User::create([
            'name' => $request->nombre,
            'user_id' => 'usuario-' . rand(22171, 103929),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => 0,
            'sup' => 0,
            'usuario' => 1,
            'empresa' => $request->empresa,
            // 'registrado_por' => auth()->user()->name,
            'equipo' => gethostname(),
            'ip' => $request->ip(),
            // 'name' => $request->name,
        ]);

        return redirect()->route('index')->with('mensaje', 'Usuario registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
