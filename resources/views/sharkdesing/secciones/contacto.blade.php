<div id="contactenos" class="page-section p-140-cont bg-gray">
          <div class="container">
          
            <div class="row">
              <div class="col-md-12">
                <h2 class="section-title2 mb-45 p-0 ">ENVÍENOS SU CONSULTA</h2>
              </div>
            </div>
            
            <div class="row">
            
              <!-- CONTACT INFO -->
              <div class="col-md-4 mb-30">
            
                <div class="row">
                	<div class="col-md-12 col-sm-6">
                		<div class="cis-cont">
                		  <div class="cis-icon">
                		    <div class="icon icon-basic-map"></div>
                		  </div>
                		  <div class="cis-text">
                		    <h3>Address</h3>
                		    <p>San Miguel de Tucuman, Tucuman</p>
                		  </div>
                		</div>
                	</div>
                	            
                	<div class="col-md-12 col-sm-6">
                		<div class="cis-cont">
                		  <div class="cis-icon">
                		    <div class="icon icon-basic-mail"></div>
                		  </div>
                		  <div class="cis-text">
                		    <h3>Email</h3>
                		    <p><a href="mailto:info@haswell.com">ventas@sharkestudio.com</a></p>
                		  </div>
                		</div>
                	</div>
                	              
                	<div class="col-md-12 col-sm-6">
                		<div class="cis-cont">
                		  <div class="cis-icon">
                		    <div class="icon icon-basic-smartphone"></div>
                		  </div>
                		  <div class="cis-text">
                		    <h3>Phone</h3>
                		    <p>(381)-156464575)</p>
                		  </div>
                		</div>
                	</div>
                </div>
              
              </div>

              <!-- CONTACT FORM -->
              <div class="col-md-8">
              {!!Form::open(['url'=>'mail', 'method'=>'POST','class'=>'form-horizontal'])!!}

                
                  <div class="row">
                  
                    <div class="col-md-12">
                      <div class="row">
                        <div class="col-md-12 mb-23">
                          <!-- <label>Your name *</label> -->
                          <input value="" data-msg-required="Please enter your name." maxlength="100" class="form-control " name="nombre" placeholder="Nombre" required="" aria-required="true">
                        </div>
                       </div>

                       <div class="row">
                        <div class="col-md-12 mb-23">
                          <!-- <label>Your name *</label> -->
                          <input  value="" data-msg-required="Please enter your name." maxlength="100" class="form-control " name="apellido"  placeholder="Apellido" required="" aria-required="true">
                        </div>
                         </div>

                         <div class="row">
                        <div class="col-md-12 mb-23">
                          <!-- <label>Your email address *</label> -->
                          <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control " name="email"  placeholder="Email" required="" aria-required="true">
                        </div>
                      </div>

                      </div>
         
                    <div class="col-md-12">
                      <!-- <label>Message *</label> -->
                      <input maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control font-poppins" name="titulo" placeholder="Titulo" required="" aria-required="true"></input>
                    </div>

                  
                    <div class="col-md-12">
                      <!-- <label>Message *</label> -->
                      <textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control font-poppins" name="mensaje" placeholder="Message" required="" aria-required="true"></textarea>
                      
                      <div class="text-right">
                        <input type="submit" value="ENVIAR MENSAJE" class="button medium rounded gray  mt-40" data-loading-text="Loading...">
                      </div>
                    </div>
                    
                  </div>
                  
<!--                   <div class="row">
                    <div class="col-md-12 ">
                      <input type="submit" value="SEND MESSAGE" class="button medium gray" data-loading-text="Loading...">
                    </div>
                  </div> -->
                  
                {!!Form::close()!!}

                <div class="alert alert-success hidden" id="contactSuccess">
                  <strong>Success!</strong> Your message has been sent to us.
                </div>
              
                <div class="alert alert-danger hidden" id="contactError">
                  <strong>Error!</strong> There was an error sending your message.
                </div>
              </div>
                
            </div>
          </div>
        </div>




        <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-7">
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="ms-hero-bg-primary ms-hero-img-mountain">
                <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Contact</h2>
              </div>
              <div class="card-block">
                <form class="form-horizontal">
                  <fieldset>
                    <div class="form-group is-empty">
                      <label for="inputName" class="col-md-2 control-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputName" placeholder="Name"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="inputEmail" class="col-md-2 control-label">Email</label>
                      <div class="col-md-9">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="inputSubject" class="col-md-2 control-label">Subject</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" id="inputSubject" placeholder="Subject"> </div>
                    </div>
                    <div class="form-group is-empty">
                      <label for="textArea" class="col-md-2 control-label">Message</label>
                      <div class="col-md-9">
                        <textarea class="form-control" rows="5" id="textArea" placeholder="Your message..."></textarea>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-9 col-md-offset-2">
                        <button type="submit" class="btn btn-raised btn-primary">Submit</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
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
                    <i class="color-danger-light zmdi zmdi-pin mr-1"></i> 795 Folsom Ave, Suite 600</p>
                  <p>
                    <i class="color-warning-light zmdi zmdi-map mr-1"></i> San Francisco, CA 94107</p>
                  <p>
                    <i class="color-info-light zmdi zmdi-email mr-1"></i>
                    <a href="mailto:joe@example.com">example@domain.com</a>
                  </p>
                  <p>
                    <i class="color-royal-light zmdi zmdi-phone mr-1"></i>+34 123 456 7890 </p>
                  <p>
                    <i class="color-success-light fa fa-fax mr-1"></i>+34 123 456 7890 </p>
                </address>
              </div>
            </div>
            <div class="card card-primary animated fadeInUp animation-delay-7">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="zmdi zmdi-map"></i>Map</h3>
              </div>
              <iframe width="100%" height="340" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48342.06480344582!2d-73.980069429762!3d40.775680208459505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2589a018531e3%3A0xb9df1f7387a94119!2sCentral+Park!5e0!3m2!1sen!2sus!4v1491233314840"></iframe>
            </div>
          </div>
        </div>
      </div>