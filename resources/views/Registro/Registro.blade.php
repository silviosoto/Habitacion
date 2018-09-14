    @extends('Marco.Principal')
    @section('css')
    <link rel="stylesheet" href="{{asset('css/login/login.css')}}">
    @stop
    @section('content')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Habitación</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        </ul>
        <a  class="nav-link" href="{{ url('/') }}">Registrarse</a> 
    </div>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <form method="POST" action="{{ url('RegistroUsuario') }}" >
                {{ csrf_field() }}
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4">
                        <label for="Nombres">Nombres </label>
                        <input id="Nombres" type="Nombres" class="form-control">
                        {!! $errors->first('Nombres',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}
                    </div>
                    <div class="form-group col-md-4">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" name="email">
                        {!! $errors->first('email',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}
                        </div>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group  col-md-4">
                        <label for="password">Contraseña</label>
                        <input id="password" type="password" class="form-control" name="password">
                        {!! $errors->first('password',' <span class="helper-text font-red" data-error="wrong" data-success="right">:message</span>') !!}
                        </div>
                    <div class="form-group  col-md-4 ">
                        <label for="password_confirmation">Confirmar Contraseña</label>
                        <input id="rpassword" type="password" class="form-control" name="password_confirmation" >
                        </div>
                </div>
               <div class="form-row justify-content-center">
                    <div class="form-group  col-md-8">
                        <button class="btn btn-success btn-lg btn-block" type="submit" name="action">Submit
                        </button>
                        </div>
                    <div class="form-group  col-md-8">
                        <a class="btn btn-primary btn-lg btn-block" href="login/facebook">facebook</a>
                        </div>
               </div>
                </form>
            </div>
        </div>
    </div>
    <!-- <div class="container center">
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
    </div> -->

    <footer class="page-footer color-lateral" >
        <div class="container-fluid">
            <div class="row bg-light">
                <div class="col-12">
                    <p>Mas información</p>
                    </div>
            </div>
            </div>
        </footer>
    @stop