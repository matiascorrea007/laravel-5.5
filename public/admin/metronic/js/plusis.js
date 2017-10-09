function asignarRoles(idusu){
   var idrol=$("#rol1-"+idusu).val();

   $("#zona_etiquetas_roles-"+idusu).html($("#cargador_empresa").html());

   var miurl="usuario-asignar-rol/"+idusu+"/"+idrol+""; 


    $.ajax({
    url: miurl
    }).done( function(resul) 
    { 
      var etiquetas="";
      var roles=$.parseJSON(resul);
      $.each(roles,function(index, value) {
        etiquetas+= '<span class="label label-warning">'+value+'</span> ';
      })

     $("#zona_etiquetas_roles-"+idusu).html(etiquetas);
   
    }).fail( function() 
    {
    $("#zona_etiquetas_roles-"+idusu).html('<span style="color:red;">...Error: Aun no ha agregado roles o revise su conexion...</span>');
    }) ;

}


function quitarRoles(idusu){
   var idrol=$("#rol2-"+idusu).val();

   $("#zona_etiquetas_roles-"+idusu).html($("#cargador_empresa").html());

   var miurl="usuario-quitar-rol/"+idusu+"/"+idrol+""; 

    $.ajax({
    url: miurl
    }).done( function(resul) 
    { 
      var etiquetas="";
      var roles=$.parseJSON(resul);
      $.each(roles,function(index, value) {
        etiquetas+= '<span class="label label-warning" style="margin-left:10px;" >'+value+'</span> ';
      })

     $("#zona_etiquetas_roles-"+idusu).html(etiquetas);
   
    }).fail( function() 
    {
    $("#zona_etiquetas_roles-"+idusu).html('<span style="color:red;">...Error: Aun no ha agregado roles  o revise su conexion...</span>');
    }) ;

}






function asignarPermisoaRoles(idrol){


    var idpermiso=$("#rol1-"+idrol).val();
    var tablaDatos = $("#datos");
    $("#datos").empty();

  
    //hace referencia a la ruta , y le mandos los parametros
  $.get('usuario-rol-asignar-permiso/'+idrol+"/"+idpermiso+"" , function(data){
  //me lo muesta en el input que tenga id mostrar
  console.log(data);
$(data).each(function(key,value){
            tablaDatos.append("<tr><td>"+key.id+"</td><td>"+value.name+"</td><td><span class='label label-success'> Agregado! </span></td></tr>");
        });
});
}




function borrarPermisoaRoles(idrol,idper){


     var miurl="../usuario-rol-quitar-permiso/"+idrol+"/"+idper+""; 

     $("#filaP_"+idper+"").html($("#cargador_empresa").html() );

     console.log(idper);
        $.ajax({
    url: miurl
    }).done( function(resul) 
    {
     $("#filaP_"+idper+"").hide();
   
    }).fail( function() 
   {
     alert("No se borro correctamente, intentalo nuevamente o revisa tu conexion");
   }) ;

}
