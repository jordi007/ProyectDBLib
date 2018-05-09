jQuery(document).ready(function(){
  //alert("hola mund");
  $("#txt-codigo").focus();

  $("#btn-regresar").click(function () {
    var datos = "txt-codigo="+$("#txt-codigo").val()+"&"+
                "txt-nejemplar="+$("#txt-nejemplar").val()+"&"+
                "txt-email="+$("#txt-email").val();
    $.ajax({
      url:'ajax/accionRegresar.php',
      data: datos,
      method: 'POST',
      dataType:'json',
      success: function(resultado){
        if (!resultado['realizado']) {
          if (resultado['libro'] && resultado['libro']) {
            resultado['msg'] = 'El ejemplar no existe';
            $("#txt-nejemplar").focus();
          } else if (['libro']) {
            $("#txt-codigo").focus();
          } else if (resultado['email']) {
            $("#txt-email").focus();
          } 
        } else {
          $("#txt-codigo").val('');
          $("#txt-codigo").focus();
          $("#txt-nejemplar").val('');
          $("#txt-email").val('');
        }
        $("#div-msg").html(resultado['msg']);
      },
      error:function(e){
        
      }
    });
  });


}); 