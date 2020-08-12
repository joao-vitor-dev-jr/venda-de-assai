<?php
session_start();
include_once("conexao.php");
$sql = mysql_query($con, "SELECT * FROM combos;");
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
    <title>Açaizero - Combos</title>
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
    <h1>Monte seu combo do Açaizero</h1>
    <br><br>
    <form class="container" method="POST" action="combo.php">
    <table class="form-control bg-primary"> 
        <img src="midia/images/combo.jpeg" class="img-rounded" alt="combo" style="width: 200px; heigh: 150px;">
        <br>
            <div class="form-group">
                <label for="sel1">tipo de bebida:</label>
                <select name="bebida" class="form-control" id="sel1">
                    <option value="1">suco de laranja natural 500ml</option>
                    <option value="2">suco de maracuja natural 500ml</option>
                    <option value="3">refrigerante 350ml</option>
                    <option value="4">suco de caixa 200ml</option>
                </select>
            </div>
        </tr>
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
            <div class="form-group">
                <label for="sel1">tipo de açaí:</label>
                <select name="acai" class="form-control" id="sel2">
                    <option value="1">Açaí Simples</option>
                    <option value="2">Açaí com Fruta e Complemento</option>
                    <option value="3">Açaí com Complemento (Viajem)</option>
                    <option value="4">Açaí Barca Completp</option>
                </select>
            </div>
            <div class="form-group">
                <label for="sel1">Tipo de complemento:</label>
                <select name="complemento" class="form-control" id="sel3">
                    <option value="completo">completo</option>
                    <option value="frutas">frutas</option>
                    <option value="granola">granola</option>
                    <option value="leite">leite ninho</option>
                    <option value="castanhas">castanhas</option>
                    <option value="doces">doces</option>
                </select>
            </div>
            <td><input type="submit" class="btn btn-success" value="comprar" ></td>
        </tr>
    </table>  
    </form>  
    <h1>Seu Combo</h1>
    <div class="container">
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
    </div>
</body>
</html>