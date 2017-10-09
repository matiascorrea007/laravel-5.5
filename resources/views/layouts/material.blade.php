<!DOCTYPE html>
<html lang="en">


  @section('htmlheader')
    @include('layouts.material.htmlheader')
  @show
  <body>
    
    <!-- Preload -->
     <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>


     <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
     @include('layouts.material.FacebookSdk')



<!--include('layouts.material.config')-->
   
   <!-- <div id="ms-preload" class="ms-preload">
      <div id="status">
        <div class="spinner">
          <div class="dot1"></div>
          <div class="dot2"></div>
        </div>
      </div>
    </div>-->


    <div class="sb-site-container">

      <!-- MODAL -->
      @include('layouts.material.modal')

      <!-- Header -->
      @include('layouts.material.mainheader')
      

      <!-- MENU -->
      @include('layouts.material.menu')


        @yield('content')
      
      
      <!-- FOOTER-->
      @include('layouts.material.footer')
      <!-- container -->
      
      </div>
      
      
      
    <!-- Menu para telefonos-->
      @include('layouts.material.menu-responsive')



      <!-- SCRIPT-->
      @section('scripts')
        @include('layouts.material.scripts')
      @show
    
  </body>
</html>