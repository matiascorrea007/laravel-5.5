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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/diseno-app/comparison_20.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
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
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout\material\img\diseno-app\pixel1.png" style="visibility: visible; animation-name: zoomInDown;">
                <img class="img-responsive wow img-phone-left" src="layout\material\img\diseno-app\pixel3.png" style="visibility: visible; animation-name: img-phone-left;">
                <img class="img-responsive wow img-phone-right" src="layout\material\img\diseno-app\pixel2.png" style="visibility: visible; animation-name: img-phone-right;"> </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Idea del Producto</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <h3 class="handwriting no-mt no-mb"></h3>
                    <p class="lead handwriting">En nuestro trabajo tratamos de utilizar sólo las soluciones más modernas, convenientes e interesantes. Queremos que la App Desarrollada sea única y nueva durante tanto tiempo como sea posible..</p>
                  </li>
                </ul>
                <a href="{!! URL::to('/portafolio') !!}" class="btn btn-lg btn-raised btn-white color-success wow bounceIn animation-delay-7" style="visibility: visible; animation-name: bounceIn;">Ver Portafolio</a>
                <a href="{!! URL::to('/contacto') !!}" class="btn btn-lg btn-raised btn-royal wow bounceIn animation-delay-7" style="visibility: visible; animation-name: bounceIn;">Contactenos</a>
              </div>
            </div>
          </div>
        </div>
      </div>


     
      <div class="container">
      <div class="title">
        <h2>CARACTERÍSTICAS BRILLANTES</h2>
        <p>Aquí hay varias causas que hacen a SharkEstudio tu mejor opcion</p>
      </div>
      <div class="row">
        <div class="col-sm-4">

        <div class="color-black ml-4">
        <li class="fa fa-desktop fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">diseno Responsive</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Su proyecto se ve muy bien en cualquier dispositivo. El contenido se puede leer fácilmente y un usuario entiende libremente lo que quería decir él o ella.</p>
                  </li>
                </ul>
              </div>

              <div class="color-black ml-4">
              <li class="fa fa-eyedropper fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">ESQUEMAS DE COLORES</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">El conjunto de archivos CSS listos con diferentes esquemas de color le ayudará en la adaptación del aterrizaje rápido de acuerdo a su estilo de referencia...</p>
                  </li>
                </ul>
              </div>

              <div class="color-black ml-4">
              <li class="fa fa-file fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">PSD Incluido </h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">El archivo fuente gráfico en formato PSD se incluye en el archivo...</p>
                  </li>
                </ul>
              </div>


        </div>
        <div class="col-sm-4 col-sm-push-4">

        <div class="color-black ml-4">
              <li class="fa fa-diamond fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Puro &amp; Simple </h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Sin pelusa. Nada debe llevar al visitante lejos de la esencia principal del Web site. Debe haber sólo información importante..</p>
                  </li>
                </ul>
              </div>

              <div class="color-black ml-4">
              <li class="fa fa-file fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Documentacion </h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">La documentación detallada le ayudará a ajustar el proyecto con poco esfuerzo de acuerdo a sus necesidades..</p>
                  </li>
                </ul>
              </div>

              <div class="color-black ml-4">
              <li class="fa fa-shopping-cart fa-4x"></li>
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">Multiplataforma </h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">La página está adaptada a la mayor parte de la plataforma popular en el segmento..</p>
                  </li>
                </ul>
              </div>
      
        </div>
        <div class="col-sm-4 col-sm-pull-4">
          <div class="animation-box wow bounceIn animated" style="visibility: visible;">
            <img class="highlight-left wow animated" src="layout/material/img/diseno-app/light.png" height="192" width="48" alt="" style="visibility: visible;">
            <img class="highlight-right wow animated" src="layout/material/img/diseno-app/light.png" height="192" width="48" alt="" style="visibility: visible;">
            <img class="screen" src="layout/material/img/diseno-app/features_screen.png" alt="" height="581" width="300">
          </div>
        </div>
        
      </div>
    </div>


@endsection