<nav class="navbar yamm ms-navbar ms-navbar-primary navbar-static-top">
        <div class="container container-full">
          <div class="navbar-header">
        
            <a class="navbar-brand" href="index-1.htm">
              <!-- <img src="assets/img/demo/logo-navbar.png" alt=""> -->

              <img src="layout/material/img/logo.png" alt="" class="img-responsive">
              
            </a>
          </div>


          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">


              <li class="dropdown">
                <a href="{!! URL::to('/') !!}" class="dropdown-toggle animated fadeIn animation-delay-7"  role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Home 
                  <i class="zmdi zmdi-home"></i>
                </a>
              </li>

              
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Lineage 2 
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{!! URL::to('/lineage2') !!}">
                      <i class="ra ra-battered-axe"></i> Servicios L2</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/lineage2-panel-admin') !!}">
                      <i class="ra ra-crossed-swords"></i> Panel Admin</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/lineage2-panel-usuario') !!}">
                      <i class="ra ra-daggers"></i> Panel Usuario</a>
                  </li>
                </ul>
              </li>


              <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Servicios 
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{!! URL::to('/servicios-web') !!}">
                      <i class="fa fa-html5"></i> Paginas Web</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/servicios-web-app') !!}">
                      <i class="fa fa-windows"></i> Aplicaciones web </a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/servicios-app') !!}">
                      <i class="fa fa-android"></i> App </a>
                  </li>
                </ul>
              </li>

               <li class="dropdown">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Nosotros 
                  <i class="zmdi zmdi-chevron-down"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{!! URL::to('/nosotros') !!}">
                      <i class="fa fa-life-buoy"></i> Nosotros</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/preguntas') !!}">
                      <i class="fa fa-question-circle"></i> Preguntas </a>
                  </li>
                </ul>
              </li>


              <li class="dropdown">
                <a href="{!! URL::to('/portafolio') !!}" class="dropdown-toggle animated fadeIn animation-delay-7"  role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Portafolio 
                  <i class="fa fa-folder"></i>
                </a>
              </li>

               <li class="dropdown">
                <a href="{!! URL::to('/contacto') !!}" class="dropdown-toggle animated fadeIn animation-delay-7"  role="button" aria-haspopup="true" aria-expanded="false" data-name="blog">Contactenos 
                  <i class="fa fa-envelope"></i>
                </a>
              </li>
              


              <!--Account-->
              @if (Auth::guest())
              <li >
                 <a href="javascript:void(0)" class="btn-circle btn-circle-primary no-focus animated zoomInDown animation-delay-8" data-toggle="modal" data-target="#ms-account-modal">
              <i class="zmdi zmdi-account"></i>
            </a>
              </li>
              @else

                 <li class="dropdown " style="background:black;">
                <a href="#" class="dropdown-toggle animated fadeIn animation-delay-7" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" data-name="blog"> 
                  <i class="zmdi zmdi-account" style="color:#498a2f;"></i>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{!! URL::to('/panel') !!}">
                      <i class="fa fa-id-card"></i> Panel</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/logout') !!}">
                      <i class="fa fa-unlock"></i> Salir</a>
                  </li>
                </ul>
              </li>
              @endif


            
                <li class=""><a  href="{!! URL::to('/web-shopping-cart') !!}"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="label label-danger" id="cantidad_total">{{ $cartcount }}</span></a></li>

            </ul>

           


          </div>
          <!-- navbar-collapse collapse -->
          <div class="visible-xs-block">
          <a href="javascript:void(0)" class="sb-toggle-left btn-navbar-menu">
            <i class="zmdi zmdi-menu"></i>
          </a>
          </div>
        </div>
        <!-- container -->
      </nav>