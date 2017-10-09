  <aside class="ms-footbar">
        <div class="container">
          <div class="row">
            <div class="col-md-4 ms-footer-col">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Sitemap</h3>
                <ul class="list-unstyled ms-icon-list three_cols">
                  <li>
                    <a href="{!! URL::to('/') !!}">
                      <i class="zmdi zmdi-home"></i> Home</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/blog') !!}">
                      <i class="zmdi zmdi-edit"></i> Blog</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/portafolio') !!}">
                      <i class="zmdi zmdi-image-o"></i> Portafolio</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/servicios-app') !!}">
                      <i class="zmdi zmdi-time"></i> App</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/servicios-web-app') !!}">
                      <i class="zmdi zmdi-money"></i> Software</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/preguntas') !!}">
                      <i class="zmdi zmdi-favorite-outline"></i> Ayuda</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/nosotros') !!}">
                      <i class="zmdi zmdi-accounts"></i> Nosotros</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/servicios-web') !!}">
                      <i class="zmdi zmdi-face"></i> Services web</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/lineage2') !!}">
                      <i class="zmdi zmdi-help"></i> Lineage 2</a>
                  </li>
                  <li>
                    <a href="page-login2.htm">
                      <i class="zmdi zmdi-lock"></i> Login</a>
                  </li>
                  <li>
                    <a href="{!! URL::to('/contacto') !!}">
                      <i class="zmdi zmdi-email"></i> Contact</a>
                  </li>
                </ul>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Subscribirse</h3>
                <p class="">Suscribete para recibir todas nuestras novedades por correo .</p>
                <form>
                  <div class="form-group label-floating mt-2 mb-1">
                    <div class="input-group ms-input-subscribe">
                      <label class="control-label" for="ms-subscribe">
                        <i class="zmdi zmdi-email"></i> Email Adress</label>
                      <input type="email" id="ms-subscribe" class="form-control"> </div>
                  </div>
                  <button class="ms-subscribre-btn" type="button">Suscribirse</button>
                </form>
              </div>
            </div>
            <div class="col-md-5 col-sm-7 ms-footer-col ms-footer-alt-color">
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title text-center mb-2">Facebook</h3>
                 @if(!empty($box))
      {!! $box->box!!}
      @endif
              </div>
            </div>
            <div class="col-md-3 col-sm-5 ms-footer-col ms-footer-text-right">
              <div class="ms-footbar-block">
                <div class="ms-footbar-title">
                  
                  <h3 class="no-m ms-site-title">
                    <img src="layout/material/img/logo.png" alt="" class="img-responsive">
                  </h3>
                </div>
                <address class="no-mb">
                  <p>
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> San Miguel de Tucuman</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> Rondeau 1522</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">Ventas@sharkestudio.com</a>
                  </p>
                  <p><i class="color-royal-light zmdi zmdi-phone mr-1"></i>+54 381 6464575 </p>

                </address>
              </div>
              <div class="ms-footbar-block">
                <h3 class="ms-footbar-title">Social Media</h3>
                <div class="ms-footbar-social">
                  <a href="javascript:void(0)" class="btn-circle btn-facebook">
                    <i class="zmdi zmdi-facebook"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-twitter">
                    <i class="zmdi zmdi-twitter"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-youtube">
                    <i class="zmdi zmdi-youtube"></i>
                  </a>
                  <br>
                  <a href="javascript:void(0)" class="btn-circle btn-google">
                    <i class="zmdi zmdi-google"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-instagram">
                    <i class="zmdi zmdi-instagram"></i>
                  </a>
                  <a href="javascript:void(0)" class="btn-circle btn-github">
                    <i class="zmdi zmdi-github"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </aside>
      <footer class="ms-footer">
        <div class="container">
          <p>Copyright &copy; <a href="https://www.sharkestudio.com">SharKestudio.com</a> 2017</p>
        </div>
      </footer>
      <div class="btn-back-top">
        <a href="#" data-scroll="" id="back-top" class="btn-circle btn-circle-primary btn-circle-sm btn-circle-raised ">
          <i class="zmdi zmdi-long-arrow-up"></i>
        </a>
      </div>
    </div>