<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Modificarusuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuario', function(Blueprint $table){
        
            $table->string('password')->nullable()->change();
            $table->string('Telefono')->nullable()->change();
            $table->date('Fnacimiento')->nullable()->change();
            $table->string('foto_perfil')->nullable()->change();
            $table->string('genero')->nullable()->change();
            $table->dropColumn(['idsocial', 'link_pagina', 'foto_portada']);
        });
    }

     // Metodo encargado de obtener la información del usuario
     public function handleProviderCallback($provider)
     {
         // Obtenemos los datos del usuario
         $social_user = Socialite::driver($provider)->user(); 
         // Comprobamos si el usuario ya existe
         if ($user = User::where('email', $social_user->email)->first()) { 
             return $this->authAndRedirect($user); // Login y redirección
         } else {  
             // En caso de que no exista creamos un nuevo usuario con sus datos.
             $user = User::create([
                 'Nombres' => $social_user->name,
                 'email' => $social_user->email,
                 'foto_perfil' => $social_user->avatar,
                 'Estado' => 0
             ]);
  
             return $this->authAndRedirect($user); // Login y redirección
         }
     }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
