<?php 
$servidor = "localhost";	//estabelecendo a conexão
$usuario = "root";			//com o banco Mysql.
$senha = "";
$dbname = "acais";

//cirar conexao
$con = mysql_connect($servidor, $usuario, $senha, $dbname);
if (!$con) {
	echo "sem conexao de dados";
	// condicional para verificar se existe ou foi
	// feita a conexão com o banco.
}

mysql_close($con);

 ?>