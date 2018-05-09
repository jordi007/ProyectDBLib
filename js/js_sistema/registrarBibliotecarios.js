jQuery(document).ready(function(){
  //alert("hola mund");
  $("#txt-email").focus();

  $("#btn-registrar").click(function () {
    var datos = "txt-email="+$("#txt-email").val()+"&"+
                "txt-telefono="+$("#txt-telefono").val()+"&"+
                "txt-apellido="+$("#txt-apellido").val()+"&"+
                "txt-sueldo="+$("#txt-sueldo").val()+"&"+
                "txt-password1="+$("#txt-password1").val()+"&"+
                "txt-password2="+$("#txt-password2").val()+"&"+
                "txt-password3="+$("#txt-password3").val()+"&"+
                "txt-nombre="+$("#txt-nombre").val();
    $.ajax({
      url:'ajax/crearBibliotecario.php',
      data: datos,
      method: 'POST',
      dataType:'html',
      success: function(resultado){
        $("#div-msg").html(resultado);
        // alert(resultado['email']);
        /*if (!resultado['realizado']) {
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
        }*/
      },
      error:function(e){
        
      }
    });
  });
}); 