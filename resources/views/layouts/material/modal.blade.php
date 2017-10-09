<!-- Modal -->
      <div class="modal modal-primary" id="ms-account-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content">



            <div class="modal-header shadow-2dp no-pb">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                  <i class="zmdi zmdi-close"></i>
                </span>
              </button>
              <div class="modal-title text-center">
                  <img src="layout/material/img/logo.png" alt="" class="">
                </h3>
              </div>
              <div class="modal-header-tabs">
                <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-primary" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account"></i> Login</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-account-add"></i> Registrarse</a>
                  </li>
                  <li role="presentation">
                    <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="withoutripple">
                      <i class="zmdi zmdi-key"></i> Recuperar Password</a>
                  </li>
                </ul>
              </div>
            </div>

            


            <div class="modal-body">
              <div class="tab-content">

              <!-- Login -->
                <div role="tabpanel" class="tab-pane fade active in" id="ms-login-tab">
                  <form action="{{ url('/login') }}" method="post">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-account"></i>
                          </span>
                          <label class="control-label" for="ms-form-user">Email</label>
                          <input type="email" id="ms-form-user" class="form-control" name="email" placeholder="Email"> </div>
                      </div>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="zmdi zmdi-lock"></i>
                          </span>
                          <label class="control-label" for="ms-form-pass">Password</label>
                          <input type="password" id="ms-form-pass" class="form-control" name="password" placeholder="Password"> </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-md-6">
                          <div class="form-group no-mt">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Remember Me </label>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-raised btn-primary pull-right">Login</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>


                  <div class="text-center">
                    <h3>Login with</h3>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                      <i class="zmdi zmdi-facebook"></i> Facebook</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                      <i class="zmdi zmdi-twitter"></i> Twitter</a>
                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                      <i class="zmdi zmdi-google"></i> Google</a>
                  </div>
                </div>
                <!-- Login -->
    



                <!-- Registrarse -->
                <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                  <form action="{{ url('/register') }}" method="post" id="form" class="form-horizontal">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <fieldset>
                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="nombre" placeholder=" Ingrese El Nombre"> </div>
                      </div>




                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-user fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="apellido" placeholder=" Ingrese El Apellido"> </div>
                      </div>


                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="email" placeholder="Ingrese el Email"> </div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-lock fa-lg"></i>
                          </span>
                          <input class="form-control" type="password" name="password" placeholder="Ingrese el Password"> </div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-lock fa-lg"></i>
                          </span>
                          <input class="form-control" type="password" name="password_confirmation" placeholder="Repetir el Password"> </div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-home fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="direccion" placeholder="Ingrese su Domicilio"></div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-phone fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="telefono" placeholder="Ingrese su telefono"></div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-map-marker fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="ciudad" placeholder="Ingrese su Ciudad"></div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-map-marker fa-lg"></i>
                          </span>
                          <input class="form-control" type="text" name="cp" placeholder="Ingrese su Codigo Postal"></div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="fa fa-map-marker fa-lg"></i>
                          </span>
                          {!! Form::select('provincia', config('options.provincia'),'', array('class' => 'form-control')) !!}</div>
                      </div>

                      <div class="form-group label-floating">
                        <div class="input-group">
                          <span class="input-group-addon">
                           
                          </span>
                         {!! Recaptcha::render() !!}</div>
                      </div>



                      <button type="submit" class="btn btn-raised btn-block btn-primary">Registrarse Ahora</button>
                    </fieldset>
                  </form>
                </div>
                <!-- Registrarse -->


                <!-- Recuperar Contraseña -->
                <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                  <fieldset>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-account"></i>
                        </span>
                        <label class="control-label" for="ms-form-user">Username</label>
                        <input type="text" id="ms-form-user" class="form-control"> </div>
                    </div>
                    <div class="form-group label-floating">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="zmdi zmdi-email"></i>
                        </span>
                        <label class="control-label" for="ms-form-email">Email</label>
                        <input type="email" id="ms-form-email" class="form-control"> </div>
                    </div>
                    <button class="btn btn-raised btn-block btn-primary">Enviar Password</button>
                  </fieldset>
                </div>
                <!-- Recuperar Contraseña -->
          
              </div>
            </div>
          </div>
        </div>
      </div>