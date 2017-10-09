    
    <!-- THEME  -->
    <script src="layout/material/js/vendor.min.js"></script>

    {!!Html::script('layout/material/js/plugins.min.js')!!}
    {!!Html::script('layout/material/js/app.min.js')!!}
    {!!Html::script('layout/material/js/configurator.min.js')!!}
    {!!Html::script('layout/material/js/index.js')!!}
    {!!Html::script('layout/material/js/portfolio.js')!!}
    {!!Html::script('layout/material/js/home-generic-3.js')!!}
    {!!Html::script('layout/material/js/home-generic-5.js')!!}
    

    <!-- BX SLIDER -->    
    {!!Html::script('layout/material/js/bxslider.js')!!}

     <!-- REVOLUTION  -->
    {!!Html::script('layout/material/plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')!!}
    {!!Html::script('layout/material/plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')!!}
    
    <!--sweetalert-->
    {!!Html::script('layout/material/js/sweetalert.min.js')!!} 
    {!!Html::script('layout/material/js/sweetalert-dev.js')!!} 
    @include('sweet::alert')
    <!-- Alert Toastr -->
    {!!Html::script('layout/material/js/toastr.js')!!} 
    {!! Toastr::message() !!}

    <!-- MIS FUNCIONES (preloader , actualizar item , delete item , agregar item) -->
    {!!Html::script('layout/material/js/mis-funciones.js')!!} 
    



 <!-- livezilla.net PLACE IN BODY -->
 <div id="lvztr_4e7" style="display:none"></div><script id="lz_r_scr_b1e2a5272e780a2ff99a1d21e4cf1a6a" type="text/javascript">lz_ovlel = [{type:"wm",icon:"commenting"},{type:"chat",icon:"comments",counter:true},{type:"ticket",icon:"envelope"},{type:"knowledgebase",icon:"lightbulb-o",counter:true}];lz_ovlec = {ec_br:6,ec_bgcs:'#ffffff',ec_bgce:'#ffffff',ec_bw:0,ec_bcs:'#4989E1',ec_bce:'#4078C7',ec_shx:1,ec_shy:1,ec_shb:5,ec_shc:'#666',ec_m:[0,28,78,0],ec_ht_c:'#666666',ec_st_c:'#777777',ec_p:true,ec_a_bc:'#ffffff',ec_a_bw:2,ec_a_bgc:'#eee',ec_w:300,ec_h:120};lz_code_id="b1e2a5272e780a2ff99a1d21e4cf1a6a";var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "https://sharkestudio.com/livezilla/livezilla/server.php?rqst=track&output=jcrpt&el=ZXM_&ovlv=djI_&ovltwo=MQ__&ovlc=MQ__&esc=IzQwNzhjNw__&epc=IzQ5ODllMQ__&ovlts=MA__&ovlapo=MQ__&eci=aHR0cHM6Ly8_&ecio=aHR0cHM6Ly8_&nse="+Math.random();script.src=src;document.getElementById('lvztr_4e7').appendChild(script);</script><noscript><img src="https://sharkestudio.com/livezilla/livezilla/server.php&quest;rqst=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript>
 <!-- http://www.livezilla.net -->




<!-- LLamando a los script dentro los hmtl -->
 @yield('carrucel-portafolios')



