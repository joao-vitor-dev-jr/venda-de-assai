<?php 
session_start();
include_once("conexao.php");
if($_SESSION['login'] = "admin" && $_SESSION['senha'] = "123");
/*
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:../index.php');
  }
 
$logado = $_SESSION['login'];
*/
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
    <title>Açaizero da alegria</title>
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

    <header class="container bg-primary" style="margin-top: 80px;">
      <h1>Bem vindo ao Açaizero</h1> <img src="midia/images/acai.jpeg" style="width: 140px;">
      <br> <br>
    </header>
  <div class="container bg-warning" style="margin-top: 10px;">
    <h1>Sobre nós</h1>
    <p>O Açaizero é uma aplicação para a venda de açaís de uma forma simples tudo desenvolvido com intuito academico de pesquisa e aprendizado. Desenvolvido por João Vitor Pereira dos Santos, ficando registrado no dia 07 de novembro de 2019 tendo assim todos os direitos reservados.</p>
    <br> <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
    <br>  <br>
  </div>
   <div class="container bg-danger" style="margin-bottom: 10px;">
     <hr>
    <footer > 
      <h3>Fale conosco</h3>
      <form action="enviar.php">
        <div>
          <label>nome:</label>
          <input class="form-control" type="text" name="nome-contato" id="nome-contato" placeholder="ex.vitoria Cruz">
        </div>    
        <div>
          <label>email:</label>
          <input class="form-control" type="text" name="email-contato" id="email-contato" placeholder="ex.vitorinha@gmail.com">
        </div>
        <div>
          <label> mensagem:</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mensagem" ></textarea>
          <br>
          <i class="far fa-paper-plane"><input class="btn btn-primary" type="submit" value="Enviar"></i>
        </div>    
      </form>
    </footer>
  </div>
</body>
</html>