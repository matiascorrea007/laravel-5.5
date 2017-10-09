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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/diseno-web/comparison_19.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>


<header class="ms-hero-page ms-hero-bg-dark-light ms-hero-img-city2 mb-4 ms-bg-fixed">
        <div class="container">
          <div class="text-center">
            <h1 class="color-info mb-4 animated fadeInDown animation-delay-4">SERVICIOS</h1>
            <p class="lead lead-xl mw-800 center-block color-medium mb-2 animated fadeInDown animation-delay-4"> Estamos a la <span class="colorStar">vanguardia de la innovación</span>.<br> Descubra con nosotros las posibilidades de su próximo proyecto. </p>
          </div>
          <div class="row mt-4">
            <div class="col-md-4 col-sm-6">

              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-code"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Codigo</h4>
                  <p>Optimizacion en el desarrollo del Codigo.</p>
                </div>
              </div>

            </div>
            <div class="col-md-4 col-sm-6">
              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-desktop"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Posicionamiento Web</h4>
                  <p>SEO. Optimización para los motores de búsqueda. Código limpio y ordenado.</p>
                </div>
              </div>
            </div>
	<br>
            <div class="col-md-4 col-sm-6">
              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-shopping-cart"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Tienda Virtual</h4>
                  <p>Vendé tus productos en Internet. Catálogo de productos. Tu negocio digital las 24 horas durante todo el año abierto..</p>
                </div>
              </div>
            </div>
				<br>
            <div class="col-md-4 col-sm-6">
              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-html5"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Diseño Web</h4>
                  <p>Sitios Webs Optimizados. Diseño moderno y atractivo. Compatibles con distintos navegadores y dispositivos.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-graduation-cap"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Webs auto gestionables</h4>
                  <p>podras acceder a un panel para cambiar de forma dinamica los contenidos de las paginas.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="ms-icon-feature wow flipInX animation-delay-4" style="visibility: visible; animation-name: flipInX;">
                <div class="ms-icon-feature-icon">
                  <span class="ms-icon ms-icon-lg ms-icon-inverse ms-icon-white">
                    <i class="fa fa-send"></i>
                  </span>
                </div>
                <div class="ms-icon-feature-content color-white">
                  <h4 class="color-info">Gestor de contenidos CMS</h4>
                  <p>tendras el blog que siempre quisite , podras subir imagenes ,  videos , noticias y de una manera facil poder compartir la informacion atraves de las redes sociales.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="text-center">
            <a href="{!! URL::to('/portafolio') !!}" class="btn btn-raised btn-white color-royal animated fadeInUp animation-delay-10">
              <i class="zmdi zmdi-desktop-mac"></i> Portfolio</a>
            <a href="{!! URL::to('/contacto') !!}" class="btn btn-raised btn-white color-success animated fadeInUp animation-delay-10">
              <i class="zmdi zmdi-email"></i> Contactanos</a>
          </div>
             </div>









             <div class="container">
         <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/material/img/diseno-web/html5.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">PÁGINAS WEB ESTÁNDAR HTML5</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">Las paginas web Html5 es una buena alternativa para una empresa desea tener presencia en internet, pero no esta seguro si siguira con el negocio. También es una buena opción que valore el diseño e interacción en su web.

Esta página web es realizada usando html5, css y jquery, no es administrable osea los cambios tendría que hacerlo un diseñador web, si los cambios no son seguidos esta solución web es muy buena. Esta web al no estar limitado por los lenguajes de programación nos da la posibilidad de ser mas creativos en cuanto al diseño, claro que siempre usamos la usabilidad.

Esta web 100% responsive ó adaptable a celulares, y se puede insertar secciones administrables si es necesario..</p>
                  </li>
                </ul>
              </div>
            </div>
            </div>
            

            <div class="container">
            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">PÁGINAS WEB CMS ADMINISTRABLE</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">El Diseño de esta Pagina Web Administrable es altamente recomendable pues permite actualizar contenido web de manera facil; no se necesita dominar áreas de computación, lo que usualmente se actualiza son: proyectos, nuevos servicios, promociones, productos, servicios, noticias y más.

Esta pagina web es responsive o adaptable a celulares y tables, permitiendo una correcta visualización en diferentes dispositivos. Esto facilita la navegacion del usuario y conocer a su empresa.

Este sitio web CMS  es una buena herramienta de posicionamiento en Google, las caracteristicas de esta web esta orientado a posicionarse en Google; sabemos que no basta tener un buen sitio web; sino que sus clientes lo encuentren...</p>
                  </li>
                </ul>
              </div>
            </div>

             <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/material/img/diseno-web/blog.svg" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>
        </div>


             <div class="container">

              <div class="col-md-5 text-center mt-6">
              <div class="img-phone-container">
                <img class="img-responsive wow zoomInDown animation-delay-3 index-1" src="layout/material/img/diseno-web/shop.png" style="visibility: visible; animation-name: zoomInDown;">
                 </div>
            </div>


            <div class="col-md-7 mt-4">
              <div class="color-white ml-4">
                <h2 class="wow bounceInRight" style="visibility: visible; animation-name: bounceInRight;">PÁGINAS WEB TIENDA CATÁLOGO</h2>
                <ul class="list-unstyled hand-list">
                  <li class="wow bounceInRight animation-delay-2" style="visibility: visible; animation-name: bounceInRight;">
                    <p class="lead handwriting">El diseño web de una tienda online permite administrar los productos en sus descripciones e imagenes,  clasificados en categorias y  sub categorias, siempre buscando la facilidad de la navegación de los usuarios. Las tiendas virtuales pueden tener carrito de compras que permitan solicitar cotización o hacer pago online con plataformas Paypal o tarjetas visa o mastercard.

Nos basamos mucho en la facilidad de manejo de los usuarios ya que aun las personas no estan acostumbradas a realizar compras por internet, Ya sea por el pago con tarjeta o por no ver, tocar y oler los productos.

Esta paginas web son 100% responsive ó diseño web adaptable a celulares y tablets, diseño web personalizados en base a la forma y colores corporativos de la empresa. Web amigable a Google..</p>
                  </li>
                </ul>
              </div>
            </div>
        </div>


      </header>







      <div class="container">
        <h1 class="color-primary text-center">Compare our plans</h1>
        <p class="lead text-center center-block mb-4 mw-800">Suscipit placeat dolor iste, amet libero quidem aliquam expedita dicta repellendus ut modi sed mollitia dolorem tempore obcaecati incidunt est asperiores.</p>
        <div class="row pricing-table-container">
          <div class="col-md-4 hidden-sm hidden-xs pricing-col">
            <div class="pricing-table pricing-table-description">
              <div class="pricing-table-head">
                <h2> Plans Available
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> Pay Monthly </h3>
              </div>
              <ul class="pricing-table-content">
                <li>
                  <i class="fa fa-globe"></i>Domains </li>
                <li>
                  <i class="fa fa-briefcase"></i>Subdomains </li>
                <li>
                  <i class="fa fa-cloud-upload"></i>Diskspace </li>
                <li>
                  <i class="fa fa-envelope"></i>Email Addresses </li>
                <li>
                  <i class="fa fa-inbox"></i> MySQL Databases </li>
                <li>
                  <i class="fa fa-gift"></i>Google AdWords Credits </li>
                <li>
                  <i class="fa fa-terminal"></i>SSH Access </li>
                <li>
                  <i class="fa fa-location-arrow"></i>Message from Users List </li>
                <li>
                  <i class="fa fa-code"></i>PHP 5, Python, Node.js </li>
                <li>
                  <i class="fa fa-dashboard"></i>Scheduled Lock Screen </li>
                <li>
                  <i class="fa fa-cogs"></i>Ports Controls </li>
                <li>
                  <i class="fa fa-wrench"></i>Customisable Templates </li>
                <li>
                  <i class="fa fa-umbrella"></i>SSL Certificate </li>
                <li>
                  <i class="fa fa-gavel"></i>Premium DNS </li>
                <li>
                  <i class="fa fa-phone"></i>Phone and Web Support </li>
              </ul>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Begginer
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>4</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Professional
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>99</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Expert
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>199</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
          <div class="col-md-2 pricing-col">
            <div class="pricing-table">
              <div class="pricing-table-head">
                <h2> Ultimate
                  <span>Officia deserunt mollitia</span>
                </h2>
                <h3 class="price"> $
                  <i>499</i>.99
                  <span class="hidden-md hidden-lg">Per Month</span>
                </h3>
              </div>
              <ul class="pricing-table-content">
                <li> 1
                  <span class="hidden-md hidden-lg">Domains</span>
                </li>
                <li> 10
                  <span class="hidden-md hidden-lg">Subdomains</span>
                </li>
                <li> 10 GB
                  <span class="hidden-md hidden-lg">Diskspace</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Email Addresses</span>
                </li>
                <li> 1
                  <span class="hidden-md hidden-lg"> MySQL Databases</span>
                </li>
                <li> $50
                  <span class="hidden-md hidden-lg">Google AdWords Credits</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">SSH Access</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Message from Users List</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">PHP 5, Python, Node.js</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Scheduled Lock Screen</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Ports Controls</span>
                </li>
                <li>
                  <i class="fa fa-times"> </i>
                  <span class="hidden-md hidden-lg">Customizable Templates</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">SSL Certificate</span>
                </li>
                <li>
                  <i class="fa fa-times"></i>
                  <span class="hidden-md hidden-lg">Premium DNS</span>
                </li>
                <li>
                  <i class="fa fa-check"></i>
                  <span class="hidden-md hidden-lg">Phone &amp; Support</span>
                </li>
              </ul>
              <div class="pricing-table-footer text-center">
                <a href="javascript:void(0)" class="btn btn-primary btn-raised">
                  <i class="zmdi zmdi-cloud-download"></i> Get Now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>



@endsection