@extends('Marco.Principal')
@section('css')
<link rel="stylesheet" href="{{asset('css/Ofertas.css')}}">
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
        <button class="dropdown-item" type="button"> <a href="/Usuario">Perfil</a></button>
        <button class="dropdown-item" type="button">Cerrar sesión</button>
      </div>
    </div>    
    </span>
</nav>
<div class="container">
  <div class="Espacio" ></div>
</div>
<div class="container">
<nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
</div>
<div class="container">
  <div class="row align-items-cente">
    <div class="col-4 ">
     
    </div>
    <div class="col-8 Espacio">
      
    </div>
    </div>
    <div class="row">
      <div class=" col-4 Filtros blue rounded border">
        <div class="container">
          <div class="row">
            <div class="col-12">
            <blockquote class="blockquote">
                <p class="mb-0">Filtros</p>
              </blockquote>
              <div class="container-filtro rounded border">

              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-8 cards-view ">
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="https://i.ytimg.com/vi/BXb2vMo_ijM/maxresdefault.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://i.ytimg.com/vi/BXb2vMo_ijM/maxresdefault.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://i.ytimg.com/vi/BXb2vMo_ijM/maxresdefault.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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