@extends('Marco.Principal')

@section('css')
<link rel="stylesheet" href="{{asset('css/login/login.css')}}">
@stop
@section('content')
<nav class="green">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="container center">
    <div class="section"></div>
    <div class="Error"></div>
  
        <div class="row ">
        <div class="centro">
        <form  method="POST" action="{{ url('RegistroUsuario') }}">
        {{ csrf_field() }}
            <div class="row">
                <div class="input-field col s12">
                    <input id="Nombres" type="text" class="validate" name="Nombres">
                    <label for="Nombres">Nombres</label>
                    {!! $errors->first('Nombres',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}

                </div>
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                    {!! $errors->first('email',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}

                </div>
            </div>
            <div class="row">
                <div class="input-field col s6 ">
                    <input id="password" type="password" class="validate"  name="password">
                    <label for="password">Contraseña</label>
                    {!! $errors->first('password',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}
 
                </div>
                <div class="input-field col s6 ">
                    <input id="rpassword" type="password" class="validate"name="password_confirmation" >
                    <label for="password_confirmation">Confirmar Contraseña</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 ">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                    <i class="material-icons right">send</i>
                </button>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="input-field col s12 ">
                <a class="waves-effect waves-light btn-large btn-facebook" href="login/facebook"><i class="material-icons left"></i>facebook</a>
                </div>
            </div>
           
        </div>
        </div>  
      </div>
     
  </div>
        
      </div>
    </div>
</div>

  <footer class="page-footer color-lateral" >
      <div class="footer-copyright">
        <div class="container">

        <a class="grey-text text-lighten-4 right" href="#!">Mas Información</a>
        </div>
      </div>
    </footer>
@stop