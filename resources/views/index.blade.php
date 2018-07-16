@extends('Marco.Principal')

@section('css')
<link rel="stylesheet" href="{{asset('css/login/login.css')}}">
@stop
@section('content')
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{ url('Registro') }}">Registrarse</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container center">
    <div class="section"></div>
   
        <div class="row ">
        <div class="centro">
        <form action="" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
                <div class="row">
                    <div class="input-field col s12">
                        <input id="email" type="email" class="validate">
                        <label for="email">Email</label>
                    </div>
                </div>
            <div class="row">
                <div class="input-field col s12 ">
                    <input id="password" type="password" class="validate">
                    <label for="password">Password</label>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="input-field col s12 ">
                <a class="waves-effect waves-light btn-large btn-facebook" href="login/facebook"><i class="material-icons left"></i>facebook</a>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12 ">
                <a class="waves-effect waves-light btn-large btn-tewtter"><i class="material-icons left"></i>twetter</a>
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