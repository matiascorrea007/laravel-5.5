




<div class="wrap ms-hero-bg-dark mt-6 ms-bg-fixed" style="background-image: url(layout/material/img/app-bg.jpg);background-size: cover; background-position: center center;">
        <div class="container">
          <h2 class="text-center mb-4 color-white">Portfolio</h2>
          <div class="mw-800 center-block mb-4">
            <ul class="nav nav-tabs nav-tabs-transparent color-white indicator-primary nav-tabs-full nav-tabs-4" role="tablist">
              <li role="presentation" class="active filter" data-filter="all">
                <a class="withoutripple" href="#home7" aria-controls="home7" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-desktop-mac"></i>
                  <span class="hidden-xs">All</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".lineage2">
                <a class="withoutripple" href="#lineage2" aria-controls="lineage2" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-language-html5"></i>
                  <span class="hidden-xs">Lineage2</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".html">
                <a class="withoutripple" href="#html" aria-controls="html" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-language-html5"></i>
                  <span class="hidden-xs">HTML</span>
                </a>
              </li>
              <li role="presentation" class="filter" data-filter=".soft">
                <a class="withoutripple" href="#soft" aria-controls="soft" role="tab" data-toggle="tab">
                  <i class="zmdi zmdi-language-javascript"></i>
                  <span class="hidden-xs">Aplicaiones web</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="row" id="Container">
            


           <!-- item -->
           @foreach($portafolios as $portafolio)
            <div class="col-md-4 col-sm-6 mix lineage2">
              <div class="card">
                <figure class="ms-thumbnail">
                  <img src="{{$portafolio->imagen}}" alt="" class="img-responsive">
                  <figcaption class="ms-thumbnail-caption text-center">
                    <div class="ms-thumbnail-caption-content">
                      <h4 class="ms-thumbnail-caption-title mb-2">{{$portafolio->nombre}}</h4>
                      <a href="{{ url('portafolio-theme-'.$portafolio->id) }}" class="btn btn-raised btn-white color-info wow flipInX animation-delay-8">
                        <i class="zmdi zmdi-eye">Ver</i>
                      </a>
                    </div>
                  </figcaption>
                </figure>
                <div class="card-block text-center portfolio-item-caption hidden">
                  <h3 class="color-primary no-mt">Lorem ipsum dolor</h3>
                  <p>Explicabo consequatur quidem praesentium quas qui eius ina Cupiditate ratione sint.</p>
                </div>
              </div>
            </div>
            @endforeach
           
          </div>
        </div>
      </div>