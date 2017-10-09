    

    <!-- jQuery  -->
    {!!Html::script('layout/element/js/jquery.min.js')!!}

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    {!!Html::script('layout/element/js/bootstrap.js')!!}

    <!-- js para el formulario wizrd del checkout-->
    {!!Html::script('layout/element/js/jquery.backstretch.js')!!}
    {!!Html::script('layout/element/js/scripts.js')!!}
   

    <!--sweetalert-->
    {!!Html::script('layout/element/js/sweetalert.min.js')!!} 
    {!!Html::script('layout/element/js/sweetalert-dev.js')!!} 
    @include('sweet::alert')
    
    <!-- Alert Toastr -->
    {!!Html::script('layout/element/js/toastr.js')!!} 
    {!! Toastr::message() !!}
    
    <!-- MIS FUNCIONES (preloader , actualizar item , delete item , agregar item) -->
    {!!Html::script('layout/element/js/mis-funciones.js')!!} 
    

     <!-- MAGNIFIC POPUP -->
    {!!Html::script('layout/element/js/jquery.magnific-popup.min.js')!!}
    <!-- PORTFOLIO SCRIPTS -->
    {!!Html::script('layout/element/js/isotope.pkgd.min.js')!!}
    {!!Html::script('layout/element/js/imagesloaded.pkgd.min.js')!!}
    {!!Html::script('layout/element/js/masonry.pkgd.min.js')!!}
    <!-- APPEAR -->    
    {!!Html::script('layout/element/js/jquery.appear.js')!!}
    <!-- OWL CAROUSEL -->    
    {!!Html::script('layout/element/js/owl.carousel.min.js')!!}
    <!-- PARALLAX -->    
    {!!Html::script('layout/element/js/jquery.stellar.min.js')!!}
    <!-- MAIN SCRIPT -->
    {!!Html::script('layout/element/js/main.js')!!} 
    <!-- JQUERY TWEETS -->
    {!!Html::script('layout/element/js/jquery.tweet.js')!!} 
    <!-- ONE PAGE NAV -->
    {!!Html::script('layout/element/js/jquery.nav.js')!!} 
    
    <!-- REVOSLIDER SCRIPTS  -->
    {!!Html::script('layout/element/js/jquery.themepunch.tools.min.js')!!} 
    {!!Html::script('layout/element/js/jquery.themepunch.revolution.min.js')!!} 


    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
      The following part can be removed on Server for On Demand Loading) -->
 

    {!!Html::script('layout/element/js/extensions/revolution.extension.actions.min.js')!!} 
    {!!Html::script('layout/element/js/extensions/revolution.extension.carousel.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.kenburn.min.js')!!} 
    {!!Html::script('layout/element/js/extensions/revolution.extension.layeranimation.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.migration.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.navigation.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.parallax.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.slideanims.min.js')!!}
    {!!Html::script('layout/element/js/extensions/revolution.extension.video.min.js')!!}


    <script type="text/javascript">
      $(document).ready(function() {
                //ONE PAGE NAV  ---------------------------------------------------------------------------
                    var top_offset = $('header').height() - 1;  // get height of fixed navbar

                    $('#nav-onepage').onePageNav({
                        currentClass: 'current',
                        changeHash: false,
                        scrollSpeed: 700,
                        scrollOffset: top_offset,
                        scrollThreshold: 0.5,
                        filter: '',
                        easing: 'swing',
                        begin: function() {
                            //I get fired when the animation is starting
                        },
                        end: function() {
                            //I get fired when the animation is ending
                        },
                        scrollChange: function($currentListItem) {
                            //I get fired when you enter a section and I pass the list item of the section
                        }
                    });
          
      });//END document.ready 
    </script>

    

      
    <!-- SLIDER REVOLUTION INITIALIZATION  -->
    <script type="text/javascript">
      jQuery(document).ready(function() {
          
        jQuery("#rev_slider_280_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: "revo-slider/js/",
          sliderLayout: "fullscreen",
          dottedOverlay: "none",
          delay: 9000,
          /*navigation: {},*/
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [868, 768, 500, 720],
          lazyType: "none",
          parallax: {
            type: "3D",
            origo: "slidercenter",
            speed: 1000,
            levels: [0, 10, 15, 20, 25, 30, 5, 0, 45, 50, 47, 48, 49, 50, 51, 55],
            type: "3D",
            ddd_shadow: "off",
            ddd_bgfreeze: "off",
            ddd_overflow: "hidden",
            ddd_layer_overflow: "visible",
            ddd_z_correction: 65,
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "off",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
       
      }); /*ready*/
    </script>

    


    <script type="text/javascript">
        var tpj = jQuery,
            revapi642,
            revapi640,
            revapi638,
            revapi636,
            revapi634,
            revapi632,
            revapi630,
            revapi628;

        tpj(document).ready(function() {

            

            revapi632 = tpj("#rev_slider_632_1").show().revolution({
                sliderType: "standard",
                jsFileLocation: "//server.local/revslider/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                    keyboardNavigation: "off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation: "off",
                    mouseScrollReverse: "default",
                    onHoverStop: "off",
                    touch: {
                        touchenabled: "on",
                        swipe_threshold: 75,
                        swipe_min_touches: 1,
                        swipe_direction: "horizontal",
                        drag_block_vertical: false
                    },
                    arrows: {
                        style: "uranus",
                        enable: true,
                        hide_onmobile: true,
                        hide_under: 767,
                        hide_onleave: false,
                        tmp: '',
                        left: {
                            h_align: "left",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        },
                        right: {
                            h_align: "right",
                            v_align: "center",
                            h_offset: 20,
                            v_offset: 0
                        }
                    }
                },
                viewPort: {
                    enable: true,
                    outof: "wait",
                    visible_area: "50%"
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1240, 1024, 778, 480],
                gridheight: [500, 500, 500, 500],
                lazyType: "none",
                minHeight: "500",
                parallax: {
                    type: "scroll",
                    origo: "slidercenter",
                    speed: 400,
                    levels: [5, 10, 15, 20, 25, 30, 35, 40, -15, -20, -25, -30, -35, -40, -45, 55],
                    type: "scroll",
                },
                shadow: 0,
                spinner: "off",
                stopLoop: "on",
                stopAfterLoops: 0,
                stopAtSlide: 1,
                shuffle: "off",
                autoHeight: "off",
                disableProgressBar: "on",
                hideThumbsOnMobile: "off",
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                debugMode: false,
                fallbacks: {
                    simplifyAll: "off",
                    nextSlideOnWindowFocus: "off",
                    disableFocusListener: false,
                }
            });



            


            function sliderAnchors() {

                var anchorarray = new Array;
                lastknowheaderheight = 0; //jQuery('').height();

                // ANCHOR AND ITS HIGHLITS
                jQuery('.tp-rs-menulink').each(function(i) {
                    var a = jQuery(this),
                        obj = new Object();

                    obj.button = a;
                    obj.href = a.attr("href");
                    if (obj.href != undefined) {
                        obj.fakehref = obj.href.replace("#", "#!");

                        if (obj.href != undefined && obj.href.split("http").length < 2 && obj.href != "#wp-toolbar") {
                            obj.target = jQuery(obj.href);
                            obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
                        }

                        if (obj.target != undefined && obj.target.length > 0)
                            anchorarray.push(obj);
                    }
                });

                jQuery('.tp-rs-menulink').each(function(i) {
                    var a = jQuery(this);
                    a.click(function() {

                        var obj = new Object(),
                            ypos = 0;

                        if (a.attr('href') != undefined) {
                            obj.href = a.attr("href");
                            obj.target = jQuery(obj.href);
                            if (obj.href != undefined && obj.target != undefined && jQuery(obj.target).length > 0) {


                                //if (jQuery(this).hasClass("tp-rs-menu-selected")) return false;

                                obj.offset = obj.target.data('offset') == undefined ? 0 : obj.target.data('offset');
                                obj.top = jQuery(obj.target).offset().top;
                                ypos = obj.top + obj.offset;
                                var counter = {
                                    val: doctop
                                };


                                if (jQuery('body').data('currenscrollanim') != undefined)
                                    jQuery('body').data('currenscrollanim').pause();


                                var sanim = punchgs.TweenLite.to(counter, 1.5, {
                                    val: ypos,
                                    ease: punchgs.Power4.easeOut,
                                    onUpdate: function() {
                                        forcescrolled = true;
                                        punchgs.TweenLite.set(jQuery('body, html'), {
                                            scrollTop: counter.val
                                        });
                                    },
                                    onComplete: function() {
                                        forcescrolled = false;
                                        jQuery(window).trigger("scroll.tprsmenu");
                                    }
                                });

                                forcescrolled = true;
                                jQuery.each(anchorarray, function(index, o) {
                                    if (obj.href !== o.href) {
                                        o.button.removeClass("tp-rs-menu-selected");
                                    } else {
                                        o.button.addClass("tp-rs-menu-selected");
                                        window.history.pushState('', '', obj.href)
                                    }
                                });


                                jQuery('body').data('currenscrollanim', sanim);
                                return false;
                            } else {
                                return true;
                            }
                        } else {
                            return true;
                        }
                    })
                });

            }

            sliderAnchors();
        }); /*ready*/
    </script>
<!-- JS end --> 



<!-- script tabla de precios --> 
<script>
            $( document ).ready(function() {
                $(".single_table").on({
                    mouseenter: function () {
                        $(".single_table").removeClass("active2");
                        $(this).addClass("active2");
                    },
                    mouseleave: function () {
                        $(".single_table").removeClass("active2");
                        $(this).addClass("active2");

                    }
                });
            });
        </script>

  


 <!-- livezilla.net PLACE IN BODY -->
 <div id="lvztr_4e7" style="display:none"></div><script id="lz_r_scr_b1e2a5272e780a2ff99a1d21e4cf1a6a" type="text/javascript">lz_ovlel = [{type:"wm",icon:"commenting"},{type:"chat",icon:"comments",counter:true},{type:"ticket",icon:"envelope"},{type:"knowledgebase",icon:"lightbulb-o",counter:true}];lz_ovlec = {ec_br:6,ec_bgcs:'#ffffff',ec_bgce:'#ffffff',ec_bw:0,ec_bcs:'#4989E1',ec_bce:'#4078C7',ec_shx:1,ec_shy:1,ec_shb:5,ec_shc:'#666',ec_m:[0,28,78,0],ec_ht_c:'#666666',ec_st_c:'#777777',ec_p:true,ec_a_bc:'#ffffff',ec_a_bw:2,ec_a_bgc:'#eee',ec_w:300,ec_h:120};lz_code_id="b1e2a5272e780a2ff99a1d21e4cf1a6a";var script = document.createElement("script");script.async=true;script.type="text/javascript";var src = "https://sharkestudio.com/livezilla/livezilla/server.php?rqst=track&output=jcrpt&el=ZXM_&ovlv=djI_&ovltwo=MQ__&ovlc=MQ__&esc=IzQwNzhjNw__&epc=IzQ5ODllMQ__&ovlts=MA__&ovlapo=MQ__&eci=aHR0cHM6Ly8_&ecio=aHR0cHM6Ly8_&nse="+Math.random();script.src=src;document.getElementById('lvztr_4e7').appendChild(script);</script><noscript><img src="https://sharkestudio.com/livezilla/livezilla/server.php&quest;rqst=track&amp;output=nojcrpt" width="0" height="0" style="visibility:hidden;" alt=""></noscript>
 <!-- http://www.livezilla.net -->