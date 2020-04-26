$('#login').click(function(){

  var user  = $('#user').val();
  var clave = $('#clave').val();

  $.ajax({
    method: 'POST',
    url: 'controller/loginController.php',
    data: {user_php: user, clave_php: clave},
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){
        swal('Error', 'Por favor complete los campos', 'error');
      }else if(res == 'error_2'){
        swal('Error', 'Por favor ingrese una matricula valida', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'La matricula y contraseña que ingresaste es incorrecta', 'error');
      }else{
        window.location.href= res
      }

    }
  });

});


$('#registro').click(function(){

  var form = $('#formulario_registro').serialize();

  $.ajax({
    method: 'POST',
    url: 'controller/registroController.php',
    data: form,
    beforeSend: function(){
      $('#load').show();
    },
    success: function(res){
      $('#load').hide();

      if(res == 'error_1'){
        swal('Error', 'Campos obligatorios, por favor llena la matricula y las contraseñas', 'warning');
      }else if(res == 'error_2'){
        swal('Error', 'Las contraseñas deben ser iguales, por favor intentalo de nuevo', 'error');
      }else if(res == 'error_3'){
        swal('Error', 'La matricula que ingresaste ya se encuentra registrada', 'error');
      }else if(res == 'error_4'){
        swal('Error', 'Por favor ingresa una matricula valida', 'warning');
      }else{
        window.location.href = res ;
      }


    }
  });

});
