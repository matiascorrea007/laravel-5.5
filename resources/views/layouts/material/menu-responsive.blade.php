<div class="ms-slidebar sb-slidebar sb-left sb-style-overlay" id="ms-slidebar" style="margin-left: -300px; transform: translate(300px);">
      <div class="sb-slidebar-container">
        <header class="ms-slidebar-header" style="background-image: url(layout/material/img/app-bg.jpg);">
          <div class="ms-slidebar-login">
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account"></i> Login</a>
            <a href="javascript:void(0)" class="withripple">
              <i class="zmdi zmdi-account-add"></i> Register</a>
          </div>
          <div class="ms-slidebar-title">
            <form class="search-form">
              <input id="search-box-slidebar" type="text" class="search-input" placeholder="Search..." name="q">
              <label for="search-box-slidebar">
                <i class="zmdi zmdi-search"></i>
              </label>
            </form>
            <div class="ms-slidebar-t">
              <img src="layout/material/img/logo.png" alt="" class="img-responsive">
              </h3>
            </div>
          </div>
        </header>
        <ul class="ms-slidebar-menu" id="slidebar-menu" role="tablist" aria-multiselectable="true">
          
            <li class="" role="tab" id="sch5">
            <a class="collapsed" role="button" href="{!! URL::to('/') !!}" >
              <i class="zmdi zmdi-home"></i> Home </a>
          </li>

      
          <li class="panel" role="tab" id="sch2">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc2" aria-expanded="false" aria-controls="sc2">
              <i class="zmdi zmdi-desktop-mac"></i> Lineage 2 </a>
            <ul id="sc2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch2">
              <li>
                <a href="{!! URL::to('/lineage2') !!}">Servicios L2</a>
              </li>
              <li>
                <a href="{!! URL::to('/lineage2-panel-admin') !!}">Panel Admin</a>
              </li>
              <li>
                <a href="{!! URL::to('/lineage2-panel-usuario') !!}">Panel Usuario</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch4">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc4" aria-expanded="false" aria-controls="sc4">
              <i class="zmdi zmdi-washing-machine"></i> Servicios </a>
            <ul id="sc4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch4">
              <li>
                <a href="{!! URL::to('/servicios-web') !!}">Servicios Web</a>
              </li>
              <li>
                <a href="{!! URL::to('/servicios-web-app') !!}">Aplicaciones Web</a>
              </li>
              <li>
                <a href="{!! URL::to('/servicios-app') !!}">App</a>
              </li>
            </ul>
          </li>
          <li class="panel" role="tab" id="sch5">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#slidebar-menu" href="#sc5" aria-expanded="false" aria-controls="sc5">
              <i class="zmdi zmdi-pin-help"></i> Nosotros </a>
            <ul id="sc5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="sch5">
              <li>
                <a href="{!! URL::to('/nosotros') !!}">Nosotros</a>
              </li>
              <li>
                <a href="{!! URL::to('/preguntas') !!}">Preguntas</a>
              </li>
            </ul>
          </li>

           <li class="panel" role="tab" id="sch5">
            <a class="collapsed" role="button" href="{!! URL::to('/portafolio') !!}" >
              <i class="zmdi zmdi-photo-size-select-small"></i> Portafolios </a>
          </li>

          <li class="panel" role="tab" id="sch5">
            <a class="collapsed" role="button" href="{!! URL::to('/contacto') !!}" >
              <i class="zmdi zmdi-email"></i> Contactenos </a>
          </li>


        
        </ul>


        <div class="ms-slidebar-social ms-slidebar-block">
          <h4 class="ms-slidebar-block-title">Social Links</h4>
          <div class="ms-slidebar-social">
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-facebook">
              <i class="zmdi zmdi-facebook"></i>
              <span class="badge badge-pink">12</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-twitter">
              <i class="zmdi zmdi-twitter"></i>
              <span class="badge badge-pink">4</span>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-google">
              <i class="zmdi zmdi-google"></i>
              <div class="ripple-container"></div>
            </a>
            <a href="javascript:void(0)" class="btn-circle btn-circle-raised btn-instagram">
              <i class="zmdi zmdi-instagram"></i>
              <div class="ripple-container"></div>
            </a>
          </div>
        </div>
      </div>
    </div>