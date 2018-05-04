jQuery(document).ready(function(){
  //alert("hola mund");
  $("#div-suscriptor").hide();

  $("#btn-nuevo").click(function () {
    $("#div-suscriptor").show();
    $("#btn-nuevo").hide();
    $("#txt-email").focus();
  });
}); 