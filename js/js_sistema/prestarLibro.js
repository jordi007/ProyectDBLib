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
}); 