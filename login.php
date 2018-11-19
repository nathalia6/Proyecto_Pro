<?php

session_start();
if (isset($_SESSION["user"])) {
  header("location: login");
}

?>

<!DOCTYPE html>
<html>
  <head>
    <style>
body {
      background-image: url("imag/nojrc.jpg ");
       background-size: 100% 100%;
background-attachment: fixed;
    }
      
}

</style>

    <meta charset="utf-8">
    <title>NOJRC</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
    <script src="js/jquery-1.12.3.min.js" charset="utf-8"></script>
    <script src="bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
<body>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          
          <form method="post">
            <br><br>
            <h1><p class="text-center">Inventario NOJRC</p></h1>
            <br><br>
            <div class="form-group">
              <h4><label for="user"> Usuario o email</font></label></h4>
              <input type="text" name="user" id="user" class="form-control"required>
            </div>
            <div class="form-group">
              <h4><label for="pass">Contraseña</label></h4>
              <input type="password" name="pass" id="pass" class="form-control" required>
            </div>
            <br><br>
            <div class="form-group text-center" >
              <input type="button" name="login" id="login" value="Iniciar" class="btn btn-success">
            </div>
            <br>
            <span id="result"></span>
          </form>
          
        </div>
      </div>
    </div>
  </body>
</html>

<script>
  $(document).ready(function() {
    $('#login').click(function(){
      var user = $('#user').val();
      var pass = $('#pass').val();
      if($.trim(user).length > 0 && $.trim(pass).length > 0){
        $.ajax({
          url:"logueame.php",
          method:"POST",
          data:{user:user, pass:pass},
          cache:"false",
          beforeSend:function() {
            $('#login').val("Conectando...");
          },
          success:function(data) {
            $('#login').val("Iniciar");
            if (data=="1") {
              $(location).attr('href','index');
            } else {
              $("#result").html("<div class='alert alert-dismissible alert-danger'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error!</strong> las credenciales son incorrectas.</div>");
            }
          }
        });
      };
    });
  });
</script>
