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
                  <figure class="cd-image-container"><img width="955" height="597" src="layout/material/img/preguntas/comparison_14.jpg" alt="">
                    <div class="cd-resize-img"><img width="955" height="597" src="layout/material/img/comparison_01.jpg" alt=""></div><span class="cd-handle"></span>
                  </figure>
                </div>
              </div>
            </div>
          </div>
        </div>
        


<div class="ms-hero-page-override ms-hero-bg-dark" style="background-image: url(layout/material/img/app-bg.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <div class="text-center">
            <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 mt-2 animated zoomInDown animation-delay-5">M</span>
            <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Preguntas Frecuentes</h1>
            <p class="lead lead-lg color-white text-center center-block mt-2 mw-800 text-uppercase fw-300 animated fadeInUp animation-delay-7">COMPRUEBE LAS PREGUNTAS MAS FRECUENTES SOBRE NUESTRO PRODUCTO.
              <span class="color-info">SI DESPUÉS DE LEER ESTA SECCIÓN </span> USTED AÚN TIENE ALGUNA DUDA, NO DUDE EN CONTACTAR CON NOSOTROS.
              <a href="{!! URL::to('/contacto') !!}"><span class="color-info">CONTACTAR</span></a>.</p>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-hero animated fadeInUp animation-delay-7">
              <div class="panel-group ms-collapse no-margin" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number One </a>
                    </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic. Perferendis,
                        odit consequuntur. Numquam doloremque aperiam ut, adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae,
                        tempora magni quidem maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                      <h3>Consectetur necessitatibus a cumque</h3>
                      <p>Quos cum sunt temporibus ipsam, voluptatibus cupiditate magnam quam officiis laborum facere ipsa molestiae ratione fugiat iusto perspiciatis dolorem veniam maxime tempore perferendis illum aliquam! Aspernatur quasi possimus rem tempora,
                        facere sed voluptatibus sequi saepe consectetur necessitatibus a cumque fugiat earum error, maxime fugit voluptatum quae minima tenetur reiciendis dolor temporibus labore odit. Quos, ex architecto labore quasi nostrum tempora ipsam
                        id numquam voluptatum, eos, tempore. Delectus, esse! Dolorum ipsam eos nesciunt soluta, voluptatum beatae?</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Two <div class="ripple-container"></div></a>
                    </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati nemo quas veniam fugit quidem, sequi aliquid ad, reiciendis eaque officiis consectetur adipisci similique eum ut dolores illum itaque accusamus quia consequuntur,
                        labore eos maiores! Ea debitis provident cupiditate optio maiores obcaecati rerum, quisquam, ut dolorem quo nemo doloremque architecto esse deleniti voluptates repellendus non neque fuga. Ut commodi nostrum delectus necessitatibus
                        totam, rerum mollitia quas qui facere nihil tempora pariatur illum maiores, quos quasi vero.</p>
                      <h3>Consectetur necessitatibus a cumque</h3>
                      <p>Ex repellendus voluptate sunt quia, error. Libero reiciendis vel nulla inventore iusto, praesentium animi dolorum assumenda doloremque quisquam molestias officiis sequi repellat beatae, odit et fugiat quod, amet incidunt cum placeat
                        voluptates sapiente nemo minima reprehenderit! Ex itaque eligendi quasi qui, repellendus facere quia? Autem culpa, quis officia, assumenda totam odit harum velit beatae, quas facilis numquam. Vel est, totam maiores ea libero accusantium
                        excepturi minima voluptatibus. Similique reiciendis architecto veritatis labore quas fuga nulla.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Three <div class="ripple-container"></div></a>
                    </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dolore voluptates corporis. Sint ullam quidem, alias. Mollitia vero quidem quis numquam id sed magnam temporibus hic atque ad similique possimus aspernatur fuga delectus
                        est, dolorum sunt sapiente blanditiis sequi esse ut nihil repellendus. Quisquam repudiandae ratione quam assumenda, voluptatibus impedit illo eligendi illum architecto soluta tenetur debitis similique ex nam mollitia, dolores vel
                        accusantium. Illum odio eius beatae, enim tenetur dolore voluptatem quos quas. Molestiae!</p>
                      <h3>Consectetur necessitatibus a cumque</h3>
                      <p>Ducimus corporis iste voluptatum. Aliquam quam nisi, est ratione accusantium officia enim, sed nostrum in velit ullam minima temporibus nam earum ipsam molestias ipsa optio architecto! Repellendus, veniam, nobis? Sequi, dignissimos
                        expedita est, accusantium sapiente eveniet repellendus quo animi libero facilis consequuntur, vitae nesciunt explicabo molestias. Nihil architecto magni assumenda quidem quae similique hic, cumque exercitationem voluptatem obcaecati
                        porro! Minima nisi nam ex optio repellendus animi dolores, enim debitis, inventore voluptas commodi nemo praesentium sunt.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Four </a>
                    </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias exercitationem qui blanditiis harum itaque perferendis autem, consequatur fugiat deserunt impedit maiores magni, voluptatum, atque, recusandae facere tempore minima
                        facilis! Commodi id dignissimos vel, deleniti officia, eligendi porro asperiores, enim rerum, quibusdam tempora perspiciatis alias voluptatum. Voluptatum facilis, quod aperiam fugiat odio exercitationem labore cupiditate enim quos
                        possimus quasi, inventore adipisci voluptatibus non amet soluta explicabo iste, assumenda vel impedit. Quo eius sit, voluptas consequuntur pariatur.</p>
                      <p>Sed nihil assumenda ad quisquam recusandae aspernatur, veniam amet. Porro quidem rem sed, nulla. Labore accusantium illum non quia consequatur, saepe fuga deleniti cumque ipsum odit temporibus, facere aperiam reiciendis fugit laudantium
                        odio quo maiores maxime debitis! Nihil perspiciatis animi aspernatur, provident ab quis veniam vero ad quisquam reiciendis fugit porro molestiae illum amet commodi quam ipsam, deleniti obcaecati voluptatem in rerum nostrum neque!
                        Eum quisquam iusto suscipit, asperiores laudantium accusamus optio hic rem odit.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Five </a>
                    </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatem placeat nihil. Rerum magnam velit modi, eum eius deleniti fuga ducimus nisi cum assumenda inventore, neque itaque fugiat tempore suscipit magni nobis. Hic
                        consequuntur odit eligendi possimus optio saepe eveniet! Corporis cumque aut quaerat consectetur sunt iure molestiae, repellendus dolore velit odio blanditiis numquam assumenda eius quod ipsam ipsum quibusdam excepturi maxime non,
                        eligendi repudiandae sit repellat, vel? Culpa reprehenderit itaque eaque. Fugiat, ducimus, quos?</p>
                      <p>Inventore enim at ab, animi, iure consequuntur saepe hic excepturi distinctio eos. Cum atque illum repudiandae laborum rerum. Aperiam aut odio cum molestias doloremque quae, ab deserunt. Facilis dolor libero aspernatur nulla incidunt,
                        quam adipisci qui, voluptatum soluta, sunt porro, molestiae quidem vero quisquam. Quia tempora temporibus quasi nesciunt dolor quo soluta expedita nisi repudiandae culpa! Quia error consectetur laborum debitis, voluptatum, corporis
                        nobis, suscipit explicabo repellat quos non fugit? Aliquam, praesentium tempora rerum? Iure.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-info">
                  <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Six </a>
                    </h4>
                  </div>
                  <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatem, deserunt corporis in cum quas nostrum molestiae amet, laudantium assumenda rem libero minus pariatur est obcaecati sapiente neque laborum excepturi possimus
                        quidem fugiat, explicabo optio. Ratione cum quos, quam facere similique fugit earum nemo harum eos a. Asperiores aspernatur porro optio, velit reprehenderit soluta nam possimus. Voluptatum, quae. Sequi adipisci nulla rem quisquam,
                        atque deleniti veritatis laboriosam, quaerat, natus nesciunt laudantium, voluptatem impedit earum ex.</p>
                      <p>Cumque aut suscipit obcaecati, voluptatibus libero! Quidem totam minus veritatis rerum, maiores repudiandae, voluptatem corporis incidunt atque at. Assumenda, vero, dolor. Natus perspiciatis ratione, ea pariatur, voluptate optio
                        quaerat odio nostrum, laboriosam, nobis ab eligendi eos assumenda nisi. Non commodi quam consequuntur voluptas cumque neque accusantium temporibus, perspiciatis magnam quia enim at optio ratione sunt illo praesentium natus labore.
                        Necessitatibus nemo nulla quae magni ut. Ratione placeat debitis, quas soluta, possimus officiis vel laudantium iste.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card wow zoomInUp animation-delay-2" style="visibility: visible; animation-name: zoomInUp;">
              <div class="ms-hero-bg-warning ms-hero-img-meeting">
                <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">F.A.Q. 2</h3>
              </div>
              <div class="panel-group ms-collapse no-margin" id="accordion2" role="tablist" aria-multiselectable="true">
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingOne2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne2" aria-expanded="false" aria-controls="collapseOne2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number One <div class="ripple-container"></div></a>
                    </h4>
                  </div>
                  <div id="collapseOne2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne2" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic.</p>
                      <p>Perferendis, odit consequuntur. Numquam doloremque aperiam ut, adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae,
                        tempora magni quidem maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingTwo2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Two </a>
                    </h4>
                  </div>
                  <div id="collapseTwo2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic.</p>
                      <p>Perferendis, odit consequuntur. Numquam doloremque aperiam ut, adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae,
                        tempora magni quidem maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingThree2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Three </a>
                    </h4>
                  </div>
                  <div id="collapseThree2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dolore voluptates corporis. Sint ullam quidem, alias. Mollitia vero quidem quis numquam id sed magnam temporibus hic atque ad similique possimus aspernatur fuga delectus
                        est, dolorum sunt sapiente blanditiis sequi esse ut nihil repellendus. Quisquam repudiandae ratione quam assumenda, voluptatibus impedit illo eligendi illum architecto soluta tenetur debitis similique ex nam mollitia, dolores vel
                        accusantium. Illum odio eius beatae, enim tenetur dolore voluptatem quos quas. Molestiae!</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingFour2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Four </a>
                    </h4>
                  </div>
                  <div id="collapseFour2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias exercitationem qui blanditiis harum itaque perferendis autem, consequatur fugiat deserunt impedit maiores magni, voluptatum, atque, recusandae facere tempore minima
                        facilis! Commodi id dignissimos vel, deleniti officia, eligendi porro asperiores, enim rerum, quibusdam tempora perspiciatis alias voluptatum. Voluptatum facilis, quod aperiam fugiat odio exercitationem labore cupiditate enim quos
                        possimus quasi, inventore adipisci voluptatibus non amet soluta explicabo iste, assumenda vel impedit. Quo eius sit, voluptas consequuntur pariatur.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingFive2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseFive2" aria-expanded="false" aria-controls="collapseFive2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Five </a>
                    </h4>
                  </div>
                  <div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatem placeat nihil. Rerum magnam velit modi, eum eius deleniti fuga ducimus nisi cum assumenda inventore, neque itaque fugiat tempore suscipit magni nobis. Hic
                        consequuntur odit eligendi possimus optio saepe eveniet! Corporis cumque aut quaerat consectetur sunt iure molestiae, repellendus dolore velit odio blanditiis numquam assumenda eius quod ipsam ipsum quibusdam excepturi maxime non,
                        eligendi repudiandae sit repellat, vel? Culpa reprehenderit itaque eaque. Fugiat, ducimus, quos?</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-warning">
                  <div class="panel-heading" role="tab" id="headingSix2">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix2" aria-expanded="false" aria-controls="collapseSix2">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Six </a>
                    </h4>
                  </div>
                  <div id="collapseSix2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix2" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatem, deserunt corporis in cum quas nostrum molestiae amet, laudantium assumenda rem libero minus pariatur est obcaecati sapiente neque laborum excepturi possimus
                        quidem fugiat, explicabo optio. Ratione cum quos, quam facere similique fugit earum nemo harum eos a. Asperiores aspernatur porro optio, velit reprehenderit soluta nam possimus. Voluptatum, quae. Sequi adipisci nulla rem quisquam,
                        atque deleniti veritatis laboriosam, quaerat, natus nesciunt laudantium, voluptatem impedit earum ex.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card wow zoomInUp animation-delay-2" style="visibility: visible; animation-name: zoomInUp;">
              <div class="ms-hero-bg-success ms-hero-img-coffee">
                <h3 class="color-white index-1 text-center pb-4 pt-4 no-mb">F.A.Q. 3</h3>
              </div>
              <div class="panel-group ms-collapse no-margin" id="accordion3" role="tablist" aria-multiselectable="true">
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingOne3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="withripple collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseOne3" aria-expanded="false" aria-controls="collapseOne3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number One <div class="ripple-container"></div></a>
                    </h4>
                  </div>
                  <div id="collapseOne3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne3" aria-expanded="false" style="height: 0px;">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic.</p>
                      <p>Perferendis, odit consequuntur. adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae, tempora magni quidem
                        maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingTwo3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseTwo3" aria-expanded="false" aria-controls="collapseTwo3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Two </a>
                    </h4>
                  </div>
                  <div id="collapseTwo3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo3" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias delectus laboriosam, ut placeat autem itaque, possimus illum dicta enim quia. Quam similique voluptate illo debitis corrupti sunt, vitae dicta officia impedit hic.</p>
                      <p>Perferendis, odit consequuntur. Numquam doloremque aperiam ut, adipisci molestiae, delectus deleniti accusamus expedita sit suscipit nostrum voluptatem perspiciatis deserunt optio hic nihil distinctio nesciunt. Dolor assumenda repudiandae,
                        tempora magni quidem maiores minima adipisci architecto porro accusamus alias fugit, doloremque fugiat veniam est totam.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingThree3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Three </a>
                    </h4>
                  </div>
                  <div id="collapseThree3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree3" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum dolore voluptates corporis. Sint ullam quidem, alias. Mollitia vero quidem quis numquam id sed magnam temporibus hic atque ad similique possimus aspernatur fuga delectus
                        est, dolorum sunt sapiente blanditiis sequi esse ut nihil repellendus. Quisquam repudiandae ratione quam assumenda, voluptatibus impedit illo eligendi illum architecto soluta tenetur debitis similique ex nam mollitia, dolores vel
                        accusantium. Illum odio eius beatae, enim tenetur dolore voluptatem quos quas. Molestiae!</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingFour3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseFour3" aria-expanded="false" aria-controls="collapseFour3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Four </a>
                    </h4>
                  </div>
                  <div id="collapseFour3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour3" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias exercitationem qui blanditiis harum itaque perferendis autem, consequatur fugiat deserunt impedit maiores magni, voluptatum, atque, recusandae facere tempore minima
                        facilis! Commodi id dignissimos vel, deleniti officia, eligendi porro asperiores, enim rerum, quibusdam tempora perspiciatis alias voluptatum. Voluptatum facilis, quod aperiam fugiat odio exercitationem labore cupiditate enim quos
                        possimus quasi, inventore adipisci voluptatibus non amet soluta explicabo iste, assumenda vel impedit. Quo eius sit, voluptas consequuntur pariatur.</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingFive3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseFive3" aria-expanded="false" aria-controls="collapseFive3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Five </a>
                    </h4>
                  </div>
                  <div id="collapseFive3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive3" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste voluptatem placeat nihil. Rerum magnam velit modi, eum eius deleniti fuga ducimus nisi cum assumenda inventore, neque itaque fugiat tempore suscipit magni nobis. Hic
                        consequuntur odit eligendi possimus optio saepe eveniet! Corporis cumque aut quaerat consectetur sunt iure molestiae, repellendus dolore velit odio blanditiis numquam assumenda eius quod ipsam ipsum quibusdam excepturi maxime non,
                        eligendi repudiandae sit repellat, vel? Culpa reprehenderit itaque eaque. Fugiat, ducimus, quos?</p>
                    </div>
                  </div>
                </div>
                <div class="panel panel-success">
                  <div class="panel-heading" role="tab" id="headingSix3">
                    <h4 class="panel-title ms-rotate-icon">
                      <a class="collapsed withripple" role="button" data-toggle="collapse" data-parent="#accordion3" href="#collapseSix3" aria-expanded="false" aria-controls="collapseSix3">
                        <i class="zmdi zmdi-attachment-alt"></i> Question Number Six </a>
                    </h4>
                  </div>
                  <div id="collapseSix3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix3" aria-expanded="false">
                    <div class="panel-body">
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab voluptatem, deserunt corporis in cum quas nostrum molestiae amet, laudantium assumenda rem libero minus pariatur est obcaecati sapiente neque laborum excepturi possimus
                        quidem fugiat, explicabo optio. Ratione cum quos, quam facere similique fugit earum nemo harum eos a. Asperiores aspernatur porro optio, velit reprehenderit soluta nam possimus. Voluptatum, quae. Sequi adipisci nulla rem quisquam,
                        atque deleniti veritatis laboriosam, quaerat, natus nesciunt laudantium, voluptatem impedit earum ex.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        
      </div>




      

@endsection