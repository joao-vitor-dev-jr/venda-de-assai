<?php
session_start();
include_once("conexao.php");

$id = filter_input(INPUT_GET, "id");

$sql = mysql_query($con, "SELECT * FROM pedidos WHERE id = $id;");

mysql_close($con);
header("Location: pedidos.php");
?>