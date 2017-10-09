
@if (Auth::guest())
<div class="boxed bg-gray pt-100 pb-80">
          <div class="container">

              <form action="{{ url('/login') }}" method="post">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                
                  <div class="col-md-2 col-sm-6">
                   
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="input-with-icon mb-20">
                      <span aria-hidden="true" class="icon icon_mail"></span>
                      <input class="form-control-purple" type="email" name="email" placeholder="Email">
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="input-with-icon mb-20">
                        <span aria-hidden="true" class="icon icon_lock-open"></span>
                        <input class="form-control-purple" type="password" name="password" placeholder="Password">
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6 mb-20">
                    <button class="button medium purple full-rounded btn-block" type="submit">GET STARTED</button>
                  </div>
                  
                </div>
              </form>

          </div>
        </div>
        @endif