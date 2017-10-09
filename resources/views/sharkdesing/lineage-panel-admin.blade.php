@extends('layouts.material')
@section('content')
@include('alerts.errors')
@include('alerts.request')
@include('alerts.success')
@include('flash::message')
    

 <div class="intro-section intro-comparison intro-light" data-jarallax="{&quot;type&quot;:&quot;scroll&quot;,&quot;speed&quot;:0.4,&quot;imgWidth&quot;:1920,&quot;imgHeight&quot;:1200,&quot;noAndroid&quot;:&quot;true&quot;,&quot;noIos&quot;:&quot;true&quot;}" style="background-image: url(layout/material/img/app-bg.jpg);"><span class="overlay" style="background-color: #000000; opacity: 0.6;"></span>
          <div class="container text-center">
            <h1 class="intro-title text-huge">SharkEstudio</h1>
            <div class="intro-description">
              <p>Donde tus ideas se hacen realidad.</p>
            </div>
            <div class="intro-buttons"><a class="btn btn-solid btn-pill btn-primary btn-nl waves-effect waves-light" href="#">Comenzar</a></div>
            <div class="compar-slider-wrap">
              <div class="cs-label">Back-end</div>
              <div class="cs-label">Front-end</div>
              <div class="compar-slider"><img class="macbook" src="layout/material/img/macbook.png" alt="MacBook">
                <div class="cs-screen">
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/admin/comparison_05.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>



<div class="ms-hero-page  ms-hero-bg-dark no-pb overflow-hidden ms-bg-fixed" style="background-image: url(layout/material/img/admin/fondo.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center color-white">
            <h1 class="animated bounceInDown animation-delay-6">Panel Admin</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Caracteristicas</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>
    

<div class="bg-warning pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Configuraciones Generales</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">El Panel de Administrador permite configurar los items basicos para el template como ser el box de "me gusta" de facebook , el Logo y el html para los Votos de tu servidor en HopZone.</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/general.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-success pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/paginas.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>

            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Configuracion de las Paginas</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Se pueden Modificar de forma sencilla el Contenido de las distintas paginas como ser Descargas , Donaciones , Informacion , Soporte , Reglas , Contacto , que seran visualizdas en el template.</p>
                  </li>
                </ul>
              </div>
            </div>

            
          </div>
        </div>
      </div>



<div class="bg-primary pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Conexion Remota</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">A través de unos simples pasos , puedes realizar la conexión remota hacia tu servidor.</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/db.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-danger pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/servicio.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
            
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Servicios Para el PJ</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Se agregaron Servicios para el PJ , como ser destrabar un char , cambiar el nombre de un personaje , cambiar el titulo , subir de nivel al clan , entre otras funciones , donde se lo puede configurar para que sea gratuito o que consuma Coins..</p>
                  </li>
                </ul>
              </div>
            </div>

            
          </div>
        </div>
      </div>
  




  <div class="bg-royal pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Creacion de Items</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">se pueden crear Combos de Items de una manera tan facil , con apretar unos botonos.</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/shop.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-primary-dark pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/ticket.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>

            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Sistema de Ticket</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Los ticket de nuestos usuarios son visualisados en forma de listas para un mejor manejo de la informacion.</p>
                  </li>
                </ul>
              </div>
            </div>

            
          </div>
        </div>
      </div>



<div class="bg-medium pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Sistema de Noticias</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Se pueden cargar noticias Rapidamente desde el panel,  que se veran en el template.</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/noticias.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
          </div>
        </div>
      </div>


      <div class="bg-dark pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/video.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
            
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Youtube</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Cargar los videos es tan facil , que solo tines que ingresar la URL del video , y se agrega en la seccion Galeria para poder ser visualizado..</p>
                  </li>
                </ul>
              </div>
            </div>

            
          </div>
        </div>
      </div>

  

  <div class="bg-warning pt-2 pb-2">
        <div class="container">
          <div class="row">
           
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Sistema de Galeria</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Se agrego un sistema de Carga de Imagenes para que se visualizen en el template.</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/element/images/admin/imagenes.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
          </div>
        </div>
      </div>
      




      <div class="ms-hero-bg-dark ms-bg-fixed pt-2 pb-2" style="background-image: url(layout/material/img/admin/fondo.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center mb-4">
            <h1 class="text-center color-white wow fadeInUp animation-delay-4" style="visibility: visible; animation-name: fadeInUp;">Probar el Demo</h1>
            <p class="lead color-light mw-800 center-block wow fadeInUp animation-delay-4" style="visibility: visible; animation-name: fadeInUp;">Si todavía no estas convencido , puedes probar el demo de forma gratuita.</p>
          </div>
          <div class="text-center ms-margin">


            <a href="{{ url('/l2/demo-admin') }}" class="btn btn-primary btn-raised btn-app wow zoomInUp animation-delay-2" style="visibility: visible; animation-name: zoomInUp;">
              <div class="btn-container">
                <i class="ra ra-battered-axe"></i>
                <span>Lineage 2</span>
                <br>
                <strong>Demo</strong>
              </div>
            </a>


          </div>
        </div>
      </div>


@endsection