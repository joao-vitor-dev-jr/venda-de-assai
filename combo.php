<?php 
session_start();
include_once("conexao.php");

$bebida = $_POST["bebida"];
$acai = $_POST["acai"];
$complemento = $_POST["complemento"];

$insert = "INSERT INTO combos (fk_acai, fk_bebida) VALUES ($acai, $bebida);";

mysql_query($conexao, $insert);

mysql_close($conexao);
header("location: combos.php");
 ?>