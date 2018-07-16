@extends('Marco.Principal')
@section('css')
<link rel="stylesheet" href="{{asset('css/ofertas/ofertas.css')}}">
@stop
@section('content')
<nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>

       
        <!-- <a href="#">
       
        <div class="row">
        <div class ="col6"> {{Auth::user()->Nombres}} </div>
        <div class ="col6"> <img class="circle" src="{{Auth::user()->foto_perfil}}" alt="" > </div>
        </div>
        
        </a> -->

        <a href="">
        <div class="chip">
          <img src="{{Auth::user()->foto_perfil}}" alt="Contact Person">
          {{Auth::user()->Nombres}} 
        </div>
        </a>
        </li>
      </ul>
    </div>
  </nav>

<div class="cont-principal ">
      <div class="section"></div>
     <div class="row">
      <div class="col s3 ct-filtro">
      
      </div>
      <div class="col s9 ct-ofertas">
      
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