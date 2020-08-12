<?php
    session_start();
    include_once("conexao.php");
    
$id = filter_input(INPUT_GET, "id");

$sql = mysql_query($con, "SELECT * FROM pedidos WHERE id = $id;");

mysql_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" rel="stylesheet" src="../js/jquery-3.4.1.min"></script>
    <script type="text/javascript" rel="stylesheet" src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Açaizero - carrinho</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="home.php">Açaizero</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="nav navbar-nav">
          <li class="nav-item active"><a class="nav-link" href="home.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="acais.php">Açais</a></li>
          <li class="nav-item"><a class="nav-link" href="bebidas.php">Bebidas</a></li>
          <li class="nav-item"><a class="nav-link" href="combos.php">Combos</a></li>
          <li class="nav-item"><a class="nav-link" href="carrinho.php">Carrinho</a></li>
         </ul>
        <div class="navbar-right"> 
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="index.php"><span class="fas fa-sign-out-alt"></span> Log-out</a></li>
          </ul>
        </div> 
      </div>
    </div>
  </nav> 
    <br> <br>
    <h1>compra Efetuada</h1>
    <br><br>
        <table class="form-control bg-primary table table-hover"> 
            <h1>Seu pedido !!</h1>
            <br>
            <tr class="form-control">
                <td>AÇAI|</td>
                <td>DESCRIÇÃO|</td>
                <td>PREÇO|</td>
                <td>BEBIDA|</td>
                <td>DESCRIÇAO|</td>
                <td>PREÇO|</td>
                <td>COMBO|</td>
                <td>DESCRIÇÃO|</td>
                <td>PREÇO|</td>
                <td>TOTAL</td>
            </tr>
            <?php while ($dados = mysql_fetch_array($sql)) { ?>
            <tr>
                <td><?=$dados["NOME_ACAI"]?></td>
                <td><?=$dados["DES_ACAI"]?></td>
                <td><?=$dados["PRECO_ACAI"]?></td>
                <td><?=$dados["NOME_BEBIDA"]?></td>
                <td><?=$dados["DES_BEBIDA"]?></td>
                <td><?=$dados["PRECO_BEBIDA"]?></td>
                <td><?=$dados["NOME_COMBO"]?></td>
                <td><?=$dados["DES_COMBO"]?></td>
                <td><?=$dados["PRECO_COMBO"]?></td>
                <td><?=$dados["PRECO_COMBO"]+$dados["PRECO_BEBIDA"]+$dados["PRECO_ACAI"]?></td>
            </tr>
           <?php } ?>
        </table>
</body>
</html>