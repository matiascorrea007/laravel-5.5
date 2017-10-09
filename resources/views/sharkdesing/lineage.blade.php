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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/lineage2/comparison_02.JPG" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>




      <div class="ms-hero-page  ms-hero-bg-dark no-pb overflow-hidden ms-bg-fixed" style="background-image: url(layout/material/img/lineage2/fondo3.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center color-white">
            <h1 class="animated bounceInDown animation-delay-6">Lineage 2</h1>
            <br><br><br><br><br>
          </div>
        </div>
      </div>




      <div class="container mt-6">
        <div class="text-center mw-800 center-block mb-4">
          <h2 class="color-primary wow fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">NUESTROS SERVICIOS</h2>
          <p class="lead wow fadeInDown animation-delay-4" style="visibility: visible; animation-name: fadeInDown;">.</p>
        </div>
        <div class="row">


          <div class="col-md-3">
            <div class="card card-royal wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-royal">
                <img src="layout/material/img/lineage2/translate.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-royal">Multi Lenguaje</h4>
                <p>Todas las plantillas cuentan con un sistema para cambiar el lenguaje.</p><br><br><br>
                <a href="{!! URL::to('/servicios-web') !!}" class="btn btn-royal">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-danger wow zoomInUp animation-delay-6" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-danger">
                <img src="layout/material/img/lineage2/news.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-danger">Sistema de Noticias</h4>
                <p>Facil carga de las noticias , con un potente editor de texto e imagenes.</p><br><br><br>
                <a href="#" class="btn btn-danger">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-warning wow zoomInUp animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-warning">
                <img src="layout/material/img/lineage2/lace.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-warning">Sistema Top Player</h4>
                <p>Integrado el sistema de Top , donde se pueden visualisar lo siguiente : pk , pvp , top clan , user online , etc.</p><br><br>
                <a href="#" class="btn btn-warning">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-success wow zoomInUp animation-delay-8" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-success">
                <img src="layout/material/img/lineage2/account.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-success">Creacion de Cuentas</h4><br>
                <p>Creacion de cuentas de forma segura , con encryptacion MD5  (con la confirmación a través de correo electrónico o de otro tipo) .</p>
                <a href="#" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>


           <div class="col-md-3">
            <div class="card card-royal wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-royal">
                <img src="layout/material/img/lineage2/youtube.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-royal">Videos</h4>
                <p>sistema de carga de videos de forma simple , atrabes del link del video , que puede ser aprobado o no por el administrador..</p><br>
                <a href="{!! URL::to('/servicios-web') !!}" class="btn btn-royal">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-danger wow zoomInUp animation-delay-6" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-danger">
                <img src="layout/material/img/lineage2/picture.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-danger">Galeria</h4>
                <p>Galeria de Fotos , al igual que los videos las imagenes pueden ser aprobadas o no por un Administrador para su visualizacion en el template.</p><br>
                <a href="#" class="btn btn-danger">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-warning wow zoomInUp animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-warning">
                <img src="layout/material/img/lineage2/responsive.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-warning">Template Responsive</h4>
                <p>Todos lo templates que desarrollamos estan adaptados para todos los dispositivos , ya sea tablet , smartphone y pc.</p><br><br>
                <a href="#" class="btn btn-warning">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-success wow zoomInUp animation-delay-8" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-success">
                <img src="layout/material/img/lineage2/switch.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-success">Online / Offline</h4>
                <p>Se puede visualizar el estado del servidor en todos los templates.</p><br><br><br><br>
                <a href="#" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

           <div class="col-md-3">
            <div class="card card-royal wow zoomInUp animation-delay-5" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-royal">
                <img src="layout/material/img/lineage2/captcha.png" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-royal">ReCaptcha</h4>br
                <p>Sistema de seguridad para evitar robots no deseados utilizando Recaptcha.</p><br><br>
                <a href="{!! URL::to('/servicios-web') !!}" class="btn btn-royal">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-danger wow zoomInUp animation-delay-6" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-danger">
                <img src="layout/material/img/lineage2/config.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-danger">Facil Configuracion</h4>
                <p>Los modulos estan diseñados , para que atraves de unos pocos pasos , quede todo configurado a tu gusto.</p><br><br>
                <a href="#" class="btn btn-danger">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-warning wow zoomInUp animation-delay-7" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-warning">
                <img src="layout/material/img/lineage2/shop.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-warning">Shop Online</h4>
                <p>Agrega Items de forma facil y rapida para que los usuarios atraves de las donaciones los adquieran.</p><br><br>
                <a href="#" class="btn btn-warning">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card card-success wow zoomInUp animation-delay-8" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-success">
                <img src="layout/material/img/lineage2/donacion.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-success">Sistema de Donaciones</h4>
                <p>Nuevo Sistema de Donaciones con MercadoPago, <strong>Proximamente Paypal</strong>.</p><br><br><br>
                <a href="#" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>

             <div class="col-md-3">
            <div class="card card-success wow zoomInUp animation-delay-8" style="visibility: visible; animation-name: zoomInUp;">
              <div class="bg-success">
                <img src="layout/material/img/lineage2/email.svg" alt="..." class="img-avatar-circle"> </div>
              <div class="card-block pt-4 text-center">
                <h4 class="color-success">Recepciones De Emails</h4><br>
                <p>istema de Contactos facil de configurar para recibir Email atraves del formulario de la web.</p>
                <a href="#" class="btn btn-success">
                  <i class="zmdi zmdi-star"></i> </a>
              </div>
            </div>
          </div>


        </div>
      </div>



          <div class="wrap  ms-hero-bg-dark ms-bg-fixed" style="background-image: url(layout/material/img/lineage2/fondo3.jpg);background-size: cover; background-position: center center;">
            <div class="container">
              <div class="text-center mb-4">
                <h2 class="uppercase color-white wow fadeInDown animation-delay-2" style="visibility: visible; animation-name: fadeInDown;">Planes</h2>
                <p class="lead uppercase color-light wow fadeInDown animation-delay-2" style="visibility: visible; animation-name: fadeInDown;"></p>
              </div>
              <div class="row">

              @if(!empty($l2mensual))
                <div class="col-lg-3 col-sm-6 price-table price-table-info animated zoomInUp animation-delay-6">
                  <header class="price-table-header">
                    <span class="price-table-category">Dominio</span>
                    <h3>
                      <sup>$</sup>{{$l2mensual->precioventa}}
                      <sub>/Anual.</sub>
                    </h3>
                  </header>
                  <div class="price-table-body">
                    <ul class="price-table-list">
                      <li><i class="zmdi zmdi-code"></i> 1 Dominio Anual.</li>
                      <li><i class="zmdi zmdi-phone"></i> 24/7 Support.</li>
                      <li><i class="zmdi zmdi-money"></i> Unico Pago Anual.</li>
                    </ul>
                    <div class="text-center">
       
                        <button onclick="AgregarItem({{$l2mensual->id}});" class="btn btn-primary" type="button"><i class="zmdi zmdi-cloud-download"></i>COMPRAR</button>
                    </div>
                  </div>
                </div>
                @endif



                <div class="col-lg-3 col-sm-6 price-table prominent price-table-success animated zoomInUp animation-delay-8">
                  <header class="price-table-header">
                    <span class="price-table-category">Plan Mensual</span>
                    <h3>
                      <sup>$</sup>300
                      <sub>/Mensual.</sub>
                    </h3>
                  </header>
                  <div class="price-table-body">
                    <ul class="price-table-list">
                      <li><i class="zmdi zmdi-code"></i> Template a eleccion.</li>
                      <li><i class="zmdi zmdi-open-in-new"></i> Generador de Noticias.</li>
                      <li><i class="zmdi zmdi-collection-folder-image"></i> Galeria Imagenes + Videos.</li>
                      <li><i class="zmdi zmdi-cloud"></i> Sistema Top.</li>
                      <li><i class="zmdi zmdi-star"></i> Sistema de Castillos.</li>
                      <li><i class="zmdi zmdi-ticket-star"></i> Sistema de ticket.</li>
                      <li><i class="zmdi zmdi-star"></i> live Bosses.</li>
                      <li><i class="zmdi zmdi-star"></i> Shop.</li>
                      <li><i class="zmdi zmdi-money-box"></i> Donaciones + Mercadopago.</li>
                      <li><i class="zmdi zmdi-phone"></i> 24/7 Support.</li>
                    </ul>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="btn btn-success btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Comprar</a>
                    </div>
                  </div>
                </div>


                <div class="col-lg-3 col-sm-6 price-table price-table-danger animated zoomInUp animation-delay-8">
                  <header class="price-table-header">
                    <span class="price-table-category">Plan Trimestral</span>
                    <h3>
                      <sup>$</sup>800
                      <sub>/Tri.</sub>
                    </h3>
                  </header>
                  <div class="price-table-body">
                    <ul class="price-table-list">
                      <li><i class="zmdi zmdi-code"></i> Template a eleccion.</li>
                      <li><i class="zmdi zmdi-open-in-new"></i> Generador de Noticias.</li>
                      <li><i class="zmdi zmdi-collection-folder-image"></i> Galeria Imagenes + Videos.</li>
                      <li><i class="zmdi zmdi-cloud"></i> Sistema Top.</li>
                      <li><i class="zmdi zmdi-star"></i> Sistema de Castillos.</li>
                      <li><i class="zmdi zmdi-ticket-star"></i> Sistema de ticket.</li>
                      <li><i class="zmdi zmdi-star"></i> live Bosses.</li>
                      <li><i class="zmdi zmdi-star"></i> Shop.</li>
                      <li><i class="zmdi zmdi-money-box"></i> Donaciones + Mercadopago.</li>
                      <li><i class="zmdi zmdi-phone"></i> 24/7 Support.</li>
                      <li><i class="zmdi zmdi-star"></i> <strong>Foro</strong>.</li>
                    </ul>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="btn btn-danger btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Comprar</a>
                    </div>
                  </div>
                </div>


                <div class="col-lg-3 col-sm-6 price-table price-table-warning animated zoomInUp animation-delay-9">
                  <header class="price-table-header">
                    <span class="price-table-category">Plan Anual</span>
                    <h3>
                      <sup>$</sup>3000
                      <sub>/Anual.</sub>
                    </h3>
                  </header>
                  <div class="price-table-body">
                    <ul class="price-table-list">
                      <li><i class="zmdi zmdi-code"></i> Template a eleccion.</li>
                      <li><i class="zmdi zmdi-open-in-new"></i> Generador de Noticias.</li>
                      <li><i class="zmdi zmdi-collection-folder-image"></i> Galeria Imagenes + Videos.</li>
                      <li><i class="zmdi zmdi-cloud"></i> Sistema Top.</li>
                      <li><i class="zmdi zmdi-star"></i> Sistema de Castillos.</li>
                      <li><i class="zmdi zmdi-ticket-star"></i> Sistema de ticket.</li>
                      <li><i class="zmdi zmdi-star"></i> live Bosses.</li>
                      <li><i class="zmdi zmdi-star"></i> Shop.</li>
                      <li><i class="zmdi zmdi-money-box"></i> Donaciones + Mercadopago.</li>
                      <li><i class="zmdi zmdi-phone"></i> 24/7 Support.</li>
                      <li><i class="zmdi zmdi-star"></i> <strong>Foro</strong>.</li>
                      <li><i class="zmdi zmdi-star"></i> <strong>Chat</strong>.</li>
                    </ul>
                    <div class="text-center">
                      <a href="javascript:void(0)" class="btn btn-warning btn-raised">
                        <i class="zmdi zmdi-cloud-download"></i> Comprar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--container -->
          </div>
        






@endsection