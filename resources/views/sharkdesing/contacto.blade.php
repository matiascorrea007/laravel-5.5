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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/contacto/comparison_18.jpg" alt="">
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

            <h1 class="animated bounceInDown animation-delay-6">Contactenos</h1>
            <p class="lead lead-lg animated bounceInDown animation-delay-7">Sharkestudio</p>
            <br><br><br><br><br>
          </div>
        </div>
      </div>


 
<br>

<div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact</h2>
              </div>
              <div class="card-block">
                {!!Form::open(['url'=>'mail', 'method'=>'POST','class'=>'form-horizontal'])!!}
                  <fieldset>
                    <div class="form-group is-empty">
                      <label for="inputName" class="col-md-2 control-label">Nombre</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" placeholder="Nombre" name="nombre" required="" aria-required="true"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="inputName" class="col-md-2 control-label">Apellido</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" placeholder="Apellido" name="apellido" required="" aria-required="true"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="inputEmail" class="col-md-2 control-label">Email</label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required="" aria-required="true" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address."> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="inputSubject" class="col-md-2 control-label">Titulo</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputSubject" placeholder="Titulo" name="titulo" required="" aria-required="true"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="textArea" class="col-md-2 control-label">Message</label>
                      <div class="col-md-9">
                      <textarea class="form-control" rows="5" id="textArea" placeholder="Tu Mensaje..." name="mensaje" required="" aria-required="true"></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-9 col-md-offset-2">
                        <button type="submit" class="btn btn-raised btn-primary">Enviar</button>
                        <a href="{!! URL::to('/') !!}" class="btn btn-danger">Cancelar</a> 
                      </div>
                    </div>
                  </fieldset>
                {!!Form::close()!!}
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-5">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-block">
                <div class="text-center mb-2">
                  <span class="ms-logo ms-logo-sm mr-1">M</span>
                  <h3 class="no-m ms-site-title">Material
                    <span>Style</span>
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> San Miguel de Tucuman</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> Rondeau 1522</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">ventas@sharkestudio.com</a>
                  </p>
                  <p><i class="color-royal-light zmdi zmdi-phone mr-1"></i>+54 381 6464575 </p>

                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-map"></i>Map</h3>
              </div>
              <iframe width="100%" height="340" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8467.282332196111!2d-65.22130537119948!3d-26.838244896824094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94225c7106f1c021%3A0x40ae3834b3813814!2sRondeau+1522%2C+4000+San+Miguel+de+Tucum%C3%A1n%2C+Tucum%C3%A1n!5e0!3m2!1ses!2sar!4v1505778938032"></iframe>
            </div>
          </div>
        </div>
      </div>

    



@endsection