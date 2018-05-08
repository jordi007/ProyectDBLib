jQuery(document).ready(function(){
  //alert("hola mund");
  $("#div-suscriptor").hide();

  $("#btn-nuevo").click(function () {
    $("#div-suscriptor").show();
    $("#btn-nuevo").hide();
    $("#txt-email").focus();
    $("#btn-prestar").attr('disabled', 'disabled');
    $("#txt-fecha-entrega").attr('disabled', 'disabled');
  });

  $("#btn-cancelarc").click(function () {
    $("#div-suscriptor").hide();
    $("#btn-nuevo").show();
    $("#txt-email").focus();
    $("#btn-prestar").removeAttr('disabled');
    $("#txt-fecha-entrega").removeAttr('disabled');
  });

  $("#btn-guardar").click(function () {
    var datos = "txt-email="+$("#txt-email").val()+"&"+
                "txt-telefono="+$("#txt-telefono").val()+"&"+
                "txt-apellido="+$("#txt-apellido").val()+"&"+
                "txt-nombre="+$("#txt-nombre").val();
    $.ajax({
      url:'ajax/crearUsuario.php',
      data: datos,
      method: 'POST',
      dataType:'json',
      success: function(resultado){
        // alert(resultado['email']);
        if (!resultado['realizado']) {
          if (!resultado['email']) {
            $("#txt-email").focus();
          } else if (!resultado['nombre']) {
            $("#txt-nombre").focus();
          } else if (!resultado['apellido']) {
            $("#txt-apellido").focus();
          } else if (!resultado['telefono']){
            $("#txt-telefono").focus();
          } 
          $("#div-msgu").html(resultado['msg']);
        } else {
          $("#div-msg").html(resultado['msg']);
          $("#div-suscriptor").hide();
          $("#txt-email").focus();
          $("#btn-prestar").removeAttr('disabled');
          $("#txt-fecha-entrega").removeAttr('disabled');
        }
      },
      error:function(e){
        
      }
    });
  });

  $("#btn-prestar").click(function () {
    var datos = "txt-codigo="+$("#txt-codigo").val()+"&"+
                "txt-nejemplar="+$("#txt-nejemplar").val()+"&"+
                "txt-email="+$("#txt-email").val()+"&"+
                "txt-fecha-entrega="+$("#txt-fecha-entrega").val();
    $.ajax({
      url:'ajax/accionPrestar.php',
      data: datos,
      method: 'POST',
      dataType:'json',
      success: function(resultado){
        if (!resultado['realizado']) {
          if (!resultado['email']) {
            $("#div-msg").html("El email no es valido");
            $("#txt-email").focus();
          } else if (!resultado['fecha']) {
            $("#div-msg").html("La fecha de entrega no es valida");
            $("#txt-fecha-entrega").focus();
          } else if (!resultado['libro']) {
            $("#div-msg").html("Libro no disponible");
            $("#btn-prestar").hide();
            setTimeout("location.href='informacionLibro.php?codigo="+$("#txt-codigo").val()+"'", 2000);
          }
        } else {
          $("#div-msg").html("Prestamo realizado correctamente");
          $("#btn-prestar").hide();
          setTimeout("location.href='informacionLibro.php?codigo="+$("#txt-codigo").val()+"'", 2000);
        }
      },
      error:function(e){
        
      }
    });
  });


}); 