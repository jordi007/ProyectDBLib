jQuery(document).ready(function(){
  //alert("hola mund");
  function limpiar() {
    $("#txt-email").val('');
    $("#txt-nombre").val('');
    $("#txt-apellido").val('');
    $("#txt-telefono").val('');
    $("#txt-sueldo").val('');
    $("#txt-password1").val('');
    $("#txt-password2").val('');
    $("#txt-password3").val('');
  }

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
          } else if (!resultado['sueldo']){
            $("#txt-sueldo").focus();
          } else if (!resultado['password']){
            $("#txt-password1").focus();
          }  else if (!resultado['root']){
            $("#txt-password3").focus();
          }
          $("#div-msg").html(resultado['msg']);
        } else {
          $("#div-msg").html(resultado['msg']);
          limpiar();
        }
      },
      error:function(e){

      }
    });
  });

  $("#btn-cancelarc").click(function () {
        limpiar();
        $("#txt-email").focus();
  });
}); 