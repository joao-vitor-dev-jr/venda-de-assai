<?php
session_start();
include_once("conexao.php");

$id_produto = filter_input(INPUT_GET, 'id_produto');
$id_bebida = filter_input(INPUT_GET, 'id_bebida');
$id_combo = filter_input(INPUT_GET, 'id_combo');
$id = filter_input(INPUT_GET, 'id');

$nome_acai = $_GET["nome_a"];
$des_acai = $_GET["descricao_a"];
$preco_acai = $_GET["preco_a"];
$nome_bebida = $_GET["nome_b"];
$des_bebida = $_GET["descricao_b"];
$preco_bebida = $_GET["preco_b"];
$nome_combo = $_GET["nome_c"];
$des_combo = $_GET["descricao_c"];
$preco_combo = $_GET["preco_c"];

mysql_query($conexao, "INSERT INTO pedidos(nome_acai, des_acai, preco_acai, nome_bebida, des_bebida,
 preco_bebida, nome_combo, des_combo, preco_combo,) VALUES ($nome_acai, $des_acai, $preco_acai, $nome_bebida,
  $des_bebida, $preco_bebida, $nome_combo, $des_combo, $preco_combo);");

mysql_close($conexao);
header("Location: carrinho.php");


?>