<?php
session_start();
include_once("conexao.php");

$sql = mysql_query($con, "SELECT * FROM bebidas WHERE id_bebida = '1';");
$sql2 = mysql_query($con, "SELECT * FROM bebidas WHERE id_bebida = '2';");
$sql3 = mysql_query($con, "SELECT * FROM bebidas WHERE id_bebida = '3';");
$sql4 = mysql_query($con, "SELECT * FROM bebidas WHERE id_bebida = '4';");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" rel="stylesheet" src="js/jquery-3.4.1.min"></script>
    <script type="text/javascript" rel="stylesheet" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Açaizero - Bebidas</title>
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
    <h1>escolha seu tipo de bebida</h1>
    <br><br>
    <div class="container">
    <table class="form-control bg-primary"> 
        <img src="midia/images/suco-laranja.jpeg" class="img-rounded" alt="suco de laranja(natural)" style="width: 200px; heigh: 150px;">
        <br>
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
            
        </tr>
        <?php while ($dados = mysql_fetch_array($sql)) { ?>
        <tr>
             <td><?=$dados["nome"]?></td>
              <td><?=$dados["descricao"]?></td>
               <td><?=$dados["preco"]?></td>
               <td><a href="comprar.php?id=<?=$dados["id"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>
    <br><br>
    <table class="form-control bg-primary">
        <img src="midia/images/suco-maracuja.jpeg" class="img-rounded" alt="suco de maracuja(natural)" style="width: 200px; heigh: 150px;">
        <br>
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
        </tr>
        <?php while ($dados = mysql_fetch_array($sql2)) { ?>
        <tr>
             <td><?=$dados["nome"]?></td>
              <td><?=$dados["descricao"]?></td>
               <td><?=$dados["preco"]?></td>

               <td><a href="comprar.php?id=<?=$dados["id"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>
    <br><br>
    <table class="form-control bg-primary">  
        <img src="midia/images/refrigerante.jpeg" class="img-rounded" alt="refrigerante 350ml" style="width: 200px; heigh: 150px;">
        <br>
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
        </tr>
        <?php while ($dados = mysql_fetch_array($sql3)) { ?>
        <tr>
             <td><?=$dados["nome"]?></td>
              <td><?=$dados["descricao"]?></td>
               <td><?=$dados["preco"]?></td>

               <td><a href="comprar.php?id=<?=$dados["id"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>
    </form> 
    <br><br>
    <table class="form-control bg-primary text-light">    
        <img src="midia/images/suco-caixa.jpeg" class="img-rounded" alt="suco caixinha 200ml" style="width: 200px; heigh: 150px;">
        <br>
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
        </tr>
        <?php while ($dados = mysql_fetch_array($sql4)) { ?>
        <tr>
             <td><?=$dados["nome"]?></td>
              <td><?=$dados["descricao"]?></td>
               <td><?=$dados["preco"]?></td>

               <td><a href="comprar.php?id=<?=$dados["id"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>  
</div>      
</body>
</html>