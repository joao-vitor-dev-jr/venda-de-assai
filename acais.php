<?php 
session_start();
include_once ("conexao.php");
$select1 = "SELECT id_produto, nome_a, descricao_a, preco_a FROM produtos WHERE id_produto = '1';";
$select2 = "SELECT * FROM produtos WHERE id_produto = '2';";
$select3 = "SELECT * FROM produtos WHERE id_produto = '3';";
$select4 = "SELECT * FROM produtos WHERE id_produto = '4';";

$sql = mysql_query($select1, $con);

$resultado = mysql_query($select2, $con);

$pesquisa = mysql_query($select3, $con);

$acais = mysql_query($select4, $con);

mysql_close($con);
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" rel="stylesheet" src="js/jquery-3.4.1.min"></script>
    <script type="text/javascript" rel="stylesheet" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <title>Açaizero - tipos de açais</title>
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
  <div class="container">
    <br> <br>
    <h1>escolha o tipo de açaí</h1>
    <br><br>
    <img src="midia/images/acai-simples.jpeg" class="img-rounded" alt="açai-simples" style="width: 200px; heigh: 150px;">
    <br>
    <table class="form-control bg-primary"> 
            <tr class="form-control">
                <td>NOME|</td>
                <td>DESCRIÇÃO|</td>
                <td>PREÇO|</td>
                <td><input type="submit" class="btn btn-success" value="comprar" ></td>
            </tr>
<?php 
mysql_connect("localhost", "root", "") or die(mysql_error());
//selecionar o banco de dados
mysql_select_db("acais");
$sql1 = "SELECT id_produto, nome_a, descricao_a, preco_a FROM produtos WHERE id_produto = '1';";
$resultado = mysql_query($sql1) or die(mysql_error());
//fechar a conexão com o servidor de banco de dados
mysql_close();
//formatar a saida pra tela


while($dados = mysql_fetch_array($resultado)){
 ?>
        <tr>
             <td><?=$dados["nome_a"]?></td>
              <td><?=$dados["descricao_a"]?></td>
               <td><?=$dados["preco_a"]?></td>
               <td><a href="comprar.php?id=<?=$dados["id_produto"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
<?php } ?>
    </table> 
    <br><br>
        <img src="midia/images/acai-banana.jpeg" class="img-rounded" alt="açai com banana e complemento" style="width: 200px; heigh: 150px;">
        <br>  
    <table class="form-control bg-primary">
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
            <td><input type="submit" class="btn btn-success" value="comprar" ></td>
        </tr>
<?php 
mysql_connect("localhost", "root", "") or die(mysql_error());
//selecionar o banco de dados
mysql_select_db("acais");
$sql1 = "SELECT id_produto, nome_a, descricao_a, preco_a FROM produtos WHERE id_produto = '1';";
$resultado = mysql_query($sql1) or die(mysql_error());
//fechar a conexão com o servidor de banco de dados
mysql_close();
//formatar a saida pra tela


while($dados = mysql_fetch_array($resultado)){
?>
        <tr>
             <td><?=$dados["nome_a"]?></td>
              <td><?=$dados["descricao_a"]?></td>
               <td><?=$dados["preco_a"]?></td>
               <td><a href="comprar.php?id=<?=$dados["id_produto"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>  
    <br><br>
        <img src="midia/images/acai-viagem.jpeg" class="img-rounded" alt="açai com complemento (viagem)" style="width: 200px; heigh: 150px;">
        <br>  
    <table class="form-control bg-primary">  
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
            <td><input type="submit" class="btn btn-success" value="comprar" ></td>
        </tr>
        <?php while ($dados = mysql_fetch_array($pesquisa)) { ?>
        <tr>
             <td><?=$dados["nome_a"]?></td>
              <td><?=$dados["descricao_a"]?></td>
               <td><?=$dados["preco_a"]?></td>
               <td><a href="comprar.php?id=<?=$dados["id_produto"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>   
    <br><br>
    <img src="midia/images/acai-completo.jpeg" class="img-rounded" alt="açai barca completo" style="width: 200px; heigh: 150px;">
    <br>
    <table class="form-control bg-primary text-light">    
        <tr class="form-control">
            <td>NOME|</td>
            <td>DESCRIÇÃO|</td>
            <td>PREÇO|</td>
        </tr>
        <?php while ($dados = mysql_fetch_array($acais)){ ?>
        <tr>
          <td><?=$dados["nome_a"]?></td>
          <td><?=$dados["descricao_a"]?></td>
          <td><?=$dados["preco_a"]?></td>
          <td><a href="comprar.php?id=<?=$dados["id_produto"]?>"><input type="submit" class="btn btn-success" value="comprar" ></a></td>
        </tr>
        <?php } ?>
    </table>    
</div>
</body>
</html>