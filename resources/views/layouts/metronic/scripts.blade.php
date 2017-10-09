
	    {!!Html::script('admin/metronic/js/jquery3-2-1.js')!!} 
        {!!Html::script('admin/metronic/js/bootstrap.js')!!} 
        {!!Html::script('admin/metronic/js/js.cookie.min.js')!!}
        {!!Html::script('admin/metronic/js/jquery.slimscroll.js')!!}
        {!!Html::script('admin/metronic/js/jquery.blockui.min.js')!!}
        {!!Html::script('admin/metronic/js/bootstrap-switch.js')!!}
        {!!Html::script('admin/metronic/js/moment.min.js')!!}
        {!!Html::script('admin/metronic/js/daterangepicker.js')!!}
        {!!Html::script('admin/metronic/js/morris.js')!!}
        {!!Html::script('admin/metronic/js/raphael-min.js')!!}
        {!!Html::script('admin/metronic/js/jquery.waypoints.min.js')!!}
        {!!Html::script('admin/metronic/js/jquery.counterup.js')!!}
        {!!Html::script('admin/metronic/js/fullcalendar.js')!!}
        {!!Html::script('admin/metronic/js/jquery.flot.js')!!}
        {!!Html::script('admin/metronic/js/jquery.flot.resize.js')!!}
        {!!Html::script('admin/metronic/js/jquery.flot.categories.js')!!}
        {!!Html::script('admin/metronic/js/jquery.easypiechart.js')!!}
        {!!Html::script('admin/metronic/js/jquery.sparkline.min.js')!!}
        {!!Html::script('admin/metronic/js/components-color-pickers.js')!!}
        {!!Html::script('admin/metronic/js/bootstrap-colorpicker.js')!!}
        {!!Html::script('admin/metronic/js/app.js')!!}
        {!!Html::script('admin/metronic/js/dashboard.js')!!}
        {!!Html::script('admin/metronic/js/jquery.minicolors.js')!!}
        {!!Html::script('admin/metronic/js/horizontal-timeline.js')!!}
        {!!Html::script('admin/metronic/js/jquery.counterup.js')!!}
        {!!Html::script('admin/metronic/js/amcharts.js')!!}
        {!!Html::script('admin/metronic/js/serial.js')!!}
        {!!Html::script('admin/metronic/js/pie.js')!!}
        {!!Html::script('admin/metronic/js/radar.js')!!}
        {!!Html::script('admin/metronic/js/light.js')!!}
        {!!Html::script('admin/metronic/js/patterns.js')!!}
        {!!Html::script('admin/metronic/js/chalk.js')!!}
        {!!Html::script('admin/metronic/js/worldLow.js')!!}
        {!!Html::script('admin/metronic/js/ammap.js')!!}
        {!!Html::script('admin/metronic/js/amstock.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.russia.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.world.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.europe.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.germany.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.usa.js')!!}
        {!!Html::script('admin/metronic/js/jquery.vmap.sampledata.js')!!}
		
		<!-- BEGIN THEME LAYOUT SCRIPTS -->
		{!!Html::script('admin/metronic/js/demo.js')!!}
        {!!Html::script('admin/metronic/js/layout.js')!!}
        {!!Html::script('admin/metronic/js/quick-sidebar.js')!!}
        {!!Html::script('admin/metronic/js/quick-nav.js')!!}
        <!-- END THEME LAYOUT SCRIPTS -->
    
        {!!Html::script('admin/metronic/js/plusis.js')!!}



        <!--sweetalert-->
        {!!Html::script('admin/metronic/js/sweetalert.min.js')!!}
        {!!Html::script('admin/metronic/js/sweetalert-dev.js')!!}
        @include('sweet::alert')

        <!-- Alert Toastr -->
        {!!Html::script('admin/metronic/js/toastr.js')!!} 
        
       







@yield('scriptdatepicker')
@yield('ventas')
@yield('compras')
@yield('presupuestos')


<!--dropzone-->
<script src="{{ asset('admin/metronic/js/dropzone/dropzone.js') }}" ></script>
<script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
           addRemoveLinks: true,
           dictRemoveFile: 'Remove',
            maxFilezise: 20,
             parallelUploads: 100,
            maxFiles: 4,

            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });

                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>




<!--select dinamico para crear-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para editar-->
<script>
$('#categoriaedit').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('../../ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoriaedit').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoriaedit').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>

<!--select dinamico para crear combo-->
<script>
$('#categoria').on('change',function(e){
var cat_id = e.target.value;
//ajax
$.get('ajax-subcategoria?cat_id='+ cat_id, function(data){
    console.log(data);
    $('#subcategoria').empty();
    $.each(data, function(index, subcatObj){
        $('#subcategoria').append('<option value="'+subcatObj.id+'">'+subcatObj.nombre+'</option>');
    });
});
});
</script>





        