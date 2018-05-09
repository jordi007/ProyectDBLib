jQuery(document).ready(function(){
  //alert("hola mund");
  $("#txt-email").focus();

  $("#btn-login").click(function () {
    var datos = "txt-password="+$("#txt-password").val()+"&"+
                "txt-email="+$("#txt-email").val();
    $.ajax({
      url:'ajax/accionLogin.php',
      data: datos,
      method: 'POST',
      dataType:'json',
      success: function(resultado){
        // $("#div-msg").html(resultado);
        if (!resultado['realizado']) {
          if (!resultado['email']) {
            $("#txt-email").focus();
          } else if (!resultado['password']) {
            $("#txt-password").focus();
          }
        } else {
          setTimeout("location.href='paginaAdministrador.php?'", 1000)
        }
        $("#div-msg").html(resultado['msg']);
      },
      error:function(e){
        
      }
    });
  });


}); 