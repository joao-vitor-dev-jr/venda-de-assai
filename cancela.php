<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, "id");

mysql_query($con, "DELETE FROM pedidos WHERE id = '$id';");

mysql_close($con);
header("Location: carrinho.php");
?>