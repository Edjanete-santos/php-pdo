
<?php
$host ='mysql:localhost;dbname=lanchonete1_api;charset=utf8';
$user ='root';
$password ='';

try{
	$conexao = new PDO($host,$user, $password);

	return $conexao;
	
	
	catch (PDOException $e) {
		echo 'Erro na conexao. Código:' . $e->getCode();
	}
}


?>