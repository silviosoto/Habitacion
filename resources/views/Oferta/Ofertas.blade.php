@extends('Marco.Principal')
@section('css')

@stop
@section('content')

<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBSGBZ1e7y4WzAtD3Psw8fP7mKFUolhziltrX3qZXH3xrFFsgtxQ"
     width="30" height="30" class="d-inline-block align-top" alt="">
    Habitación
  </a>
  <span class="navbar-text">
  <img src="{{Auth::user()->foto_perfil}}" class="rounded-circle"  width="42" >
  {{Auth::user()->Nombres}}
  </div>
</div>
    </span>
</nav>
<div class="container">
  
</div>


  <footer class="page-footer color-lateral" >
      <div class="footer-copyright">
        <div class="container">

        <a class="grey-text text-lighten-4 right" href="#!">Mas Información</a>
        </div>
      </div>
    </footer> 
@stop