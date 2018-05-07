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
      dataType:"html",
      success: function(resultado){
        $("#div-msg").html(resultado);
      },
      error:function(e){
        
      }
    });
  });


}); 