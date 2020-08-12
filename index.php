<?php 

 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <
    <title>Sistema de vendas de açai</title>
</head>
<body>
    <h1>Sistema de venda de açais - Açaizero</h1>
      <form name="logar" method="POST" action="ope.php" class="login-form">
        <h1>Login</h1>

        <div class="txtb">
          <input type="text" name="login" id="usuario">
          <span data-placeholder="Username"></span>
        </div>

        <div class="txtb">
          <input type="password" name="senha" id="senha">
          <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">



      </form>

      <script type="text/javascript">
      $(".txtb input").on("focus",function(){
        $(this).addClass("focus");
      });

      $(".txtb input").on("blur",function(){
        if($(this).val() == "")
        $(this).removeClass("focus");
      });

      </script>
</body>
</html>