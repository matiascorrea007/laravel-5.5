<header id="nav" class="header header-1 header-black affix">
          <div class="header-wrapper">
          <div class="container-m-30 clearfix">
            <div class="logo-row">
            
            <!-- LOGO --> 
            <div class="logo-container-2">
                <div class="logo-2">
                  <a href="{!! URL::to('/') !!}" class="clearfix">
                    <img src="layout/element/images/logo.png" class="logo-img" alt="Logo">
                  </a>
                </div>
              </div>

               
            <!-- BUTTON --> 
            <div class="menu-btn-respons-container">
              <button id="menu-btn" type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse" data-target="#main-menu .navbar-collapse">
                <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
              </button>
            </div>
           </div>
          </div>



          <!-- MAIN MENU CONTAINER -->
          <div class="main-menu-container">
              <div class="container-m-30 clearfix"> 
              
                <!-- MAIN MENU -->
                <div id="main-menu">

                


                  <div class="navbar navbar-default" role="navigation">

                    <!-- MAIN MENU LIST -->
                    <nav class="collapse collapsing navbar-collapse right-1024">
                      <ul class="nav navbar-nav">
                        
                        <!-- MENU ITEM -->
                        <li class="parent current">
                          <a href="{!! URL::to('/#index-link') !!}" ><div class="main-menu-title">Home</div></a>
                        </li>
                        
  
                        <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="{!! URL::to('/lineage2') !!}" ><div class="main-menu-title">Lineage 2</div></a>
                        </li>

                        <!-- MEGA MENU ITEM -->
                        <li class="parent megamenu">
                          <a href="{!! URL::to('/#services-link') !!}" ><div class="main-menu-title">Servicios</div></a> 
                        </li>         
                        
                        <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="{!! URL::to('/#portafolio-link') !!}" ><div class="main-menu-title">Portafolio</div></a>
                        </li>         
                        
                       

                        <!-- MENU ITEM -->
                        <li class="parent">
                          <a href="{!! URL::to('/#contactenos') !!}" ><div class="main-menu-title">Contactenos</div></a>
                        </li> 

                        
                         @if (Auth::check())
                         <li >
                          <a href="#" class="open-sub"><div class="main-menu-title"><img src="storage/user/avatar.png" width="30"  height="30" alt="" class="img-circle"></div></a>
                          <ul class="sub">
                          <li><a href="{!! URL::to('/panel') !!}">My Cuenta</a></li>
                          <li><a href="{!! URL::to('/logout') !!}">Salir</a></li>
                          </ul>
                        </li>
                      @endif
                        

                       @if (Auth::guest())
                      <li class="parent">
                       <a href="#"  data-toggle="modal" data-target="#registrarse"><button class="button  white full-rounded btn-block main-menu-title"   type="submit" ><i class="fa fa-plus fa-lg"> </i>Registrarse</button></a> 

                      </li>
                      @endif
                      

                    <!-- cart -->
                        <li>
                             <li class="active"><a  href="{!! URL::to('/web-shopping-cart') !!}"><i class="glyphicon glyphicon-shopping-cart"></i> <span class="label label-danger" id="cantidad_total">{{ $cartcount }}</span></a></li>
                        </li>
                        

                      </ul>
                
                    </nav>
   
                  </div>
                </div>
                <!-- END main-menu -->
                
              </div>
              <!-- END container-m-30 -->
            
          </div>
          <!-- END main-menu-container -->


          
          <!-- SEARCH READ DOCUMENTATION -->
          <ul class="cd-header-buttons">
            <li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
          </ul> <!-- cd-header-buttons -->
          <div id="cd-search" class="cd-search">
            <form class="form-search" id="searchForm" action="page-search-results.html" method="get">
              <input type="text" value="" name="q" id="q" placeholder="Search...">
            </form>
          </div>
          
          </div>
          <!-- END header-wrapper -->

        </header>