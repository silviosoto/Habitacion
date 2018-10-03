@extends('Marco.Principal')
@section('css')
<link rel="stylesheet" href="{{asset('css/Perfil.css')}}">
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
    <div class="btn-group">
      <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{Auth::user()->Nombres}}
      </button>
      <div class="dropdown-menu dropdown-menu-right">
        <button class="dropdown-item" type="button">Perfil</button>
        <button class="dropdown-item" type="button">Cerrar sesión</button>
      </div>
    </div>    
    </span>
</nav>
<div class="container">
  <div class="row">
    <div class="col-12">
    <div class="jumbotron blue">
    <div class="text-center">
        <img src="{{Auth::user()->foto_perfil}}" class="rounded-circle" alt="42">
        <h3>{{Auth::user()->Nombres}}</h3>
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