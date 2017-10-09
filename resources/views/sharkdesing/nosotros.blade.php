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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/nosotros/comparison_08.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>


<div class="ms-hero-page  ms-hero-bg-dark no-pb overflow-hidden ms-bg-fixed" style="background-image: url(layout/material/img/app-bg.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center color-white">

            <h1 class="animated bounceInDown animation-delay-6">Sobre Nosotros</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Sharkestudio</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>


<div class="container">
        <div class="card wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="card-block card-block-big">
           <!-- <h2 class="text-center fw-500">About Us</h2>
            <p class="lead text-center center-block mw-800">Discover our projects and the rigorous process of creation. Our principles are creativity, design, experience and knowledge.</p>-->
            <div class="row mt-4">
              <div class="col-md-6 col-md-push-6 text-justify">
                <h3 class="color-primary">Nuestra Empresa</h3>
                <p class="dropcaps">Somos un grupo de trabajo joven, conformado por diseñadores, programadores y community managers que amamos el diseño de paginas web.
Nuestro desafío es crecer día a día y estar actualizado a las últimas tendencias en usabilidad, diseño y tecnología. 
Para entender el enfoque y visión de una empresa hay que sumergirse en su mundo y entenderla. Por ello brindamos soluciones efectivas acordes a cada organización priorizando la imágen y la visibilidad de la misma. 
Acompañamos junto a un gran diseño una estrategia de marketing digital que abarca desde redes sociales, anuncios y posicionamiento orgánico. Cada elemento es fundamental para crear una red y tener mayor visibilidad a nivel global.</p>
              </div>
              <div class="col-md-6 col-md-pull-6">
                <h3 class="color-primary">Porque Elegirnos?</h3>
                <ol class="service-list list-unstyled">

                  <li>Nuestro trabajo no termina con el desarrollo de su página web, sino que seguimos trabajando para sacarle rentabilidad a su inversión.</li>

                  <li>Contamos con especialistas en desarrollo web, marketing y posicionamiento web.</li>

                  <li>Tendrá un diseño personalizado, único y profesional. Totalmente adaptado a sus necesidades para el desarrollo de la identidad de su empresa en internet</li>

                  <li>La transparencia y honradez guían nuestro accionar. Trabajamos de forma consistente y ética, siempre dentro del marco de la legalidad. No tenemos cuotas ocultas, sólo cobramos lo que previamente le anunciamos, por lo cual no corrés el riesgo de tener que pagar más de lo previsto.</li>
                </ol>
              </div>
            </div>
          </div>
        </div>


      </div>



<div class="container mt-6">
        <div class="text-center">
          <h2 class="color-primary">
            <span class="text-normal">Shark Estudio</span> una empresa formada por un equipo creativo y altamente capacitado.</h2>
          <p class="lead"></p>
        </div>
        <div class="mw-800 center-block">
          <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-3" role="tablist">
            <li class="wow fadeInDown animation-delay-6" role="presentation" style="visibility: visible; animation-name: fadeInDown;">
              <a href="#windows" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-arrows"></i>
                <span class="hidden-xs">MISIÓN</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-4 active" role="presentation" style="visibility: visible; animation-name: fadeInDown;">
              <a href="#macos" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-eye"></i>
                <span class="hidden-xs">VISIÓN</span>
              </a>
            </li>
            <li class="wow fadeInDown animation-delay-2" role="presentation" style="visibility: visible; animation-name: fadeInDown;">
              <a href="#linux" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="zmdi zmdi-account"></i>
                <span class="hidden-xs">VALORES</span>
              </a>
            </li>
          <span id="i2" class="ms-tabs-indicator" style="left: 266.656px; width: 266.656px;"></span></ul>
        </div>
        <div class="panel-body">
          <!-- Tab panes -->
          <div class="tab-content mt-4">
            <div role="tabpanel" class="tab-pane fade" id="windows">
              <div class="row">
                <div class="col-md-6 col-lg-5 col-md-push-6 col-lg-push-7">
                  <ul class="list-unstyled hand-list">
                    <li class="animated fadeInLeft animation-delay-2">
                      <h2 class="handwriting no-mt color-primary no-mb">MISIÓN</h2>
                      <p class="lead handwriting">Utilizar Estrategias de Negocio y Publicidad para alcanzar los objetivos de nuestros clientes. Utilizando las herramientas como pagina web, redes sociales, posicionamiento Google, Usabilidad, etc.</p>
                    </li>
                    
                  </ul>
                </div>
                <div class="col-md-6 col-lg-7 col-md-pull-6 col-lg-pull-5">
                  <img class="img-responsive animated zoomInDown animation-delay-3" src="layout\material\img\nosotros\mision.svg"> </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane active in fade" id="macos">
              <div class="row">
                <div class="col-md-6 col-lg-5">
                  <ul class="list-unstyled hand-list">
                    <li class="wow fadeInLeft animation-delay-2" style="visibility: visible; animation-name: fadeInLeft;">
                      <h2 class="handwriting no-mt color-primary no-mb">VISIÓN</h2>
                      <p class="lead handwriting">Ser una Agencia de Marketing Digital reconocida a Nivel Nacional e Internacional. Formar parte del área de Publicidad de empresas exitosas peruanas y del extranjero, proponiendo estrategias integrales.</p>
                    </li>

                  </ul>
                </div>
                <div class="col-md-6 col-lg-7">
                  <img class="img-responsive animated zoomInDown animation-delay-3" src="layout\material\img\nosotros\vision.svg"> </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="linux">
              <div class="row">
                <div class="col-md-6 col-lg-5 col-md-push-6 col-lg-push-7">
                  <ul class="list-unstyled hand-list">
                    <li class="animated fadeInLeft animation-delay-2">
                      <h2 class="handwriting no-mt color-primary no-mb">VALORES</h2>
                      <p class="lead handwriting">Nos consideramos parte de las empresas clientes y por lo tanto nuestros compromiso, discreción y colaboración a ellos. Brindadno estrategias Publicitarias de acuerdo a su empresa y rubro.</p>
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 col-lg-7 col-md-pull-6 col-lg-pull-5">
                  <img class="img-responsive animated zoomInDown animation-delay-3" height="600" width="400" src="layout\material\img\nosotros\valores.svg"> </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      

<div class="container">
<div class="card mt-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
          <div class="card-block card-block-big">
            <h3 class="text-center fw-500 mb-4">Team</h3>
            <div class="row">
              <div class="col-md-4 col-sm-6">
                <div class="card card-flat card-danger wow zoomInUp" style="visibility: visible; animation-name: zoomInUp;">
                  <div class="ms-hero-bg-danger ms-hero-img-city">
                    <img src="layout\material\img\demo\avatar1.jpg" alt="..." class="img-avatar-circle"> </div>
                  <div class="card-block pt-6 text-center">
                    <h3 class="color-danger">Victoria Smith</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                      <i class="zmdi zmdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="card card-flat card-info wow zoomInUp" style="visibility: visible; animation-name: zoomInUp;">
                  <div class="ms-hero-bg-info ms-hero-img-city">
                    <img src="layout\material\img\demo\avatar2.jpg" alt="..." class="img-avatar-circle"> </div>
                  <div class="card-block pt-6 text-center">
                    <h3 class="color-info">Charlie Durant</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                      <i class="zmdi zmdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="card card-flat card-warning wow zoomInUp" style="visibility: visible; animation-name: zoomInUp;">
                  <div class="ms-hero-bg-warning ms-hero-img-city">
                    <img src="layout\material\img\demo\avatar3.jpg" alt="..." class="img-avatar-circle"> </div>
                  <div class="card-block pt-6 text-center">
                    <h3 class="color-warning">Joan Fawert</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur alter adipisicing elit. Facilis, natuse inse voluptates officia repudiandae beatae magni es magnam autem molestias.</p>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-facebook">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-twitter">
                      <i class="zmdi zmdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-circle-xs mt-1 mr-1 no-mr-md btn-instagram">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>  
        
        
       
      
        

      


@endsection