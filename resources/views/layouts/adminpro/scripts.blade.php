
    {!!Html::script('admin/adminpro/js/jquery.min.js')!!} 
    {!!Html::script('admin/adminpro/js/popper.min.js')!!} 
    {!!Html::script('admin/adminpro/js/bootstrap.min.js')!!} 
    {!!Html::script('admin/adminpro/js/perfect-scrollbar.jquery.min.js')!!} 
    {!!Html::script('admin/adminpro/js/waves.js')!!} 
    {!!Html::script('admin/adminpro/js/sidebarmenu.js')!!} 
    {!!Html::script('admin/adminpro/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')!!} 

     <!--toltip JavaScript -->
     {!!Html::script('admin/adminpro/js/custom.min.js')!!} 
     <!--c3 JavaScript -->
     {!!Html::script('admin/adminpro/plugins/d3/d3.min.js')!!} 
     {!!Html::script('admin/adminpro/c3-master/c3.min.js')!!} 
     <!-- Style switcher -->
     {!!Html::script('admin/adminpro/plugins/styleswitcher/jQuery.style.switcher.js')!!} 
  




            

        <!--sweetalert-->
        {!!Html::script('admin/metronic/js/sweetalert.min.js')!!}
        {!!Html::script('admin/metronic/js/sweetalert-dev.js')!!}
        @include('sweet::alert')

        <!-- Alert Toastr -->
        {!!Html::script('admin/metronic/js/toastr.js')!!} 

        <!-- Datatable -->
        {!!Html::script('admin/metronic/plugins/datatables/jquery.dataTables.min.js')!!} 
        {!!Html::script('admin/metronic/plugins/datatables/dataTables.bootstrap.js')!!} 
      



        <!--MIS MODULOS-->
        {!!Html::script('admin/metronic/js/mis-modulos/usuarios.js')!!}

        <!--MIS FUNCIONES-->
        
        
       
@yield('mis-scripts')


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





        