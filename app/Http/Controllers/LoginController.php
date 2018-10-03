<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\Http\Requests;
use \App\Usuario;
use Session;
use App\Http\Requests\UsuarioRequest;
use App\Http\Requests\login;

use Illuminate\Support\Facades\Mail;

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
        $usuario->password = bcrypt($request->password);
        $usuario->Estado =1; 
        $usuario->confirmation_code = str_random(25);
        $usuario->save();
        
        $arrayUsuario = [
            "email" => $usuario->email,
        ];
        var_dump($arrayUsuario["email"]);
        // Enviar codigo de confirmacion
        Mail::send('email.confirmacion', $arrayUsuario, function($message) use ($arrayUsuario) {
            $message->from('emasl@styde.net', 'Styde.Net');
            $message->to($arrayUsuario['email'])->subject('Notificación');
        });

        return redirect()->to('/CorreoEnviado.CorreoEnviado');
    }

    public function verify($code)
    {
        $user = User::where('confirmation_code', $code)->first();

        if (! $user)
            return redirect('/');

        $user->confirmed = true;
        $user->confirmation_code = null;
        $user->save();

        return redirect('/home')->with('notification', 'Has confirmado correctamente tu correo!');
    }

    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function login(login $request)
    {   
        $autenticado = false;
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password'], 'confirmed'=>1,
        'Estado'=>'1'] )){
            $autenticado = true;
            return redirect()->to('/Ofertas');
        }
        Session::flash('message-error','Datos son incorrectos');
        return response()->json([
            "usuario" => $autenticado      
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
