<!DOCTYPE html>

<html>
 	
  @section('htmlheader')
        @include('layouts.element.htmlheader')
    @show


	<body class="font-raleway">

		  <!-- Load Facebook SDK for JavaScript -->
		<div id="fb-root"></div>
		 @include('layouts.element.FacebookSdk')

		<!-- LOADER -->	
		

    <div id="loading">
  <div class="loading-image">
  <div class="loading-page loading">
  <div class="counter">
  	<img src="layout/element/images/logo.png" alt="">
    <p>Cargando</p>
    <h1>0%
      <!--
      h1.abs loading
      h1.abs.color loading
      -->
    </h1>
    <hr/>
  </div>
</div>
</div>
</div>





		<div id="wrap" class="boxed ">
			<div class="grey-bg"> <!-- Grey BG  -->	
				
				<!-- HEADER 1 FONT RALEWAY FONT WHITE TRANSPARENT -->
        <div class="header-black-bg"></div> <!-- NEED FOR TRANSPARENT HEADER ON MOBILE -->

		
		


       @yield('content')


        <!-- FOOTER 1 FONT WHITE only social links -->
        @include('layouts.element.footer')
				<!-- BACK TO TOP -->
				<p id="back-top">
          <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>
        
			</div><!-- End BG -->	
		</div><!-- End wrap -->	
			
<!-- JS begin -->
    @section('scripts')
            @include('layouts.element.scripts')
        @show
<!-- JS end -->	
	
	</body>
</html>		