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
    alert("implementar ajax");
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
          }
        } else {
          $("#div-msg").html("Prestamo realizado correctamente");
          setTimeout("location.href='informacionLibro.php?codigo="+$("#txt-codigo").val()+"'", 2000);
        }
      },
      error:function(e){
        
      }
    });
  });


}); 