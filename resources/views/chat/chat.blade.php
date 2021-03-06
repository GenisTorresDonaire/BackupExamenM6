@extends('layouts.app')

@section('head')
<script>
    var chatid = {{$id}};
    var usuarioActual = "{{$usuarioActual}}";
</script>
@endsection

@section('content')
{{ Breadcrumbs::render('chat') }}

<div id="cargarMensajes" class="container d-flex justify-content-center ">
    
    <div class="row" >
      <div class="col-md-10" style="background-color: white;">
        <h1>CHAT</h1>
        <hr>
        <div class="col-md-2">
          
        </div>

        <div class="col-md-8 ">
            <div class="row">
                <div class="panel panel-default">
                    <div id="divChat" class="panel-heading cabeceraChat" style="background: blue; color: white; ">
                        <b id="nombreSala">{{$nom}}</b>

                    </div>         

                    <div id="Chat" class="panel-body" style="min-height: 400px; background-image: url('http://www.musicarelajante.org/wp-content/uploads/2014/09/lluvia-sonidos-naturaleza-relajantes.jpg'); overflow-y: scroll; max-height: 400px;">
                        <ul id="contenedorChat" class="list-unstyled" style="text-decoration: none; display: block; ">      
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="panel">
                    <p> 
                        <input id="mensaje" style="width: 580px;" type="text" name="mensaje" />
                        <input onclick="enviarMensaje()" style="float:right;" class="btn btn-primary" type="submit" value="->" name="Eviar">
                    </p>
                </div>
            </div>
          </div>
      </div>

      <div class="col-md-2">
            <div class="panel panel-default">
                <div id="divBanner" class="panel-heading"><b>Banner</b></div>
                    
                <div class="panel-body">
                    <img id="banner" class="img-responsive" src="{{asset('images/banner.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
