<!-- COTENT CONTAINER -->
<br><br><br><br><br><br><br><br><br><br>
        <div id="portafolio-link" class="pt-140 pt-xxs-80 bg-gray">
        
          <div class="relative">
          
            <!-- PORTFOLIO FILTER -->                    
           	<div class="container pagePortfolio__filte">
              
           	  <ul class="port-filter font-poppins">
           	  	<li>
           	  		<a href="#" class="filter active button medium purple full-rounded btn-block" data-filter="*">All Projects</a>
           	  	</li>
           	  	<li>
           	  		<a href="#" class="filter button medium purple full-rounded btn-block" data-filter=".lineage2">Lineage 2</a>
           	  	</li>
           	  	<li>
           	  		<a href="#" class="filter button medium purple full-rounded btn-block" data-filter=".design">Design</a>
           	  	</li>
           	  	<li>
           	  		<a href="#" class="filter button medium purple full-rounded btn-block" data-filter=".photography">Photography</a>
           	  	</li>
           	  </ul>
                
           	</div>                   
                    
            <!-- ITEMS GRID -->
            <ul class="port-grid port-grid-3 port-grid-gut clearfix" id="items-grid">
                

                @foreach($portafolios as $portafolio)
              <!-- Item 1 -->
              <li class="port-item mix lineage2">
                <a href="{{ url('portafolio-theme-'.$portafolio->id) }}">
                  <div class="port-img-overlay">
                    <img class="port-main-img" src="{{$portafolio->imagen}}" width="400" width="200" alt="img" >
                  </div>
                  <div class="port-overlay-cont">
                    <div class="port-title-cont2">
                      <h3>{{$portafolio->nombre}}</h3>
                      <span>design</span>
                    </div>
                  </div>
                </a>
              </li>
              @endforeach
            

            </ul>
          
          </div>
        
        </div>