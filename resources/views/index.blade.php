@extends('Marco.Principal')

@section('css')
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
     <a  class="nav-link" href="{{ url('Registro') }}">Registrarse</a> 
  </div>
</nav>
  <div class="container">   
        <br>
        <div class="row justify-content-center">
            <div class="col-4">
                <form method="POST" action="{{ url('/Login') }}">
                    {{ csrf_field() }}
                    <div class="form-group ">
                        <label for="email">Email </label>
                        <input id="email" name="email" type="email" class="form-control">  	
                        <p>{{ $errors->first('email') }}</p>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>                        
                        <input id="password" name="password" type="password" class="form-control">
                        <label for="password">Password</label>	
                        <p>{{ $errors->first('password') }}</p>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
                </form>
                </div> 
             </div>
            <div class="row justify-content-center">
                <div class="col-4 ">
                <br>
                    <a class="btn btn-primary btn-lg btn-block" href="login/facebook" role="button">facebook</a>
                 </div>
            </div>  
      </div> 
    </div>
      </div>
    </div>
</div>

@stop