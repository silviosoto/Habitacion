<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Http\Requests;
use \App\Usuario;
use App\Http\Requests\UsuarioRequest;

class LoginController extends Controller
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
    public function RegistroUsuario(UsuarioRequest $request)
    {
        $usuario = new Usuario();
        $usuario->Nombres = $request->Nombres;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->Estado =1; 
        $usuario->save();
       
        return response()->json([
            "mensaje" =>  $usuario
        ]);
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function login(Request $request)
    {
        $usuario = new Usuario();
        $usuario->Nombres = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->Estado =1; 
        $usuario->save();
        return response()->json([
            "mensaje" =>  $usuario
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
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

    // Metodo encargado de obtener la información del usuario
    public function handleProviderCallback()
    {
        // Obtenemos los datos del usuario
        $social_user = Socialite::driver('facebook')->stateless()->user(); 
      
        // Comprobamos si el usuario ya existe
        if ($user = Usuario::where('email', $social_user->email)->first()) { 
           return  $this->authAndRedirect($user);
         } 
        else {  
            // En caso de que no exista creamos un nuevo usuario con sus datos.
            $usuario = new Usuario();
            $usuario->Nombres = $social_user->name;
            $usuario->email = $social_user->email;
            $usuario->foto_perfil = $social_user->avatar;
            $usuario->Estado =1; 
            $usuario->save();
            return response()->json([
                "mensaje" =>  $usuario
            ]);
        }
    }

    // Login y redirección
    public function authAndRedirect($user)
    {
        Auth::login($user);
 
        return redirect()->to('/Ofertas');
    }
}
