<?php
	echo var_dump($_GET) . "GET <br>";
	echo var_dump($_POST) . "POST <br>";
	$nome = $_POST['camponome'];
	$codigo=  $_POST['campocodigo'];
	$opcao1 = $_POST['opcao1'];
	$opcao2 = $_POST['opcao2'];
	
	
	
	/*configurco de enderecmento do bnco de ddos*/
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_centro_interresse";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	if (!$conexao) {
		echo "N�o foi poss�vel connectar ao servidor";
		exit;
	}else{/*senao*/
		echo "<h1>Conectou!</h1>";
	}
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("N�o foi poss�vel conectar ao banco de dados");
	
	$comandosql = "INSERT INTO tb_inscricao VALUES ('',$codigo, '$nome', '3 EMI', 1, 2, '2016-08-24', '07:10:00')";
	
	echo $comandosql;
	
	$resultado = mysql_query($comandosql);
	/*Encerra a conexao*/
	
	if (mysql_errno()) { 
	  $error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>"; 
	  echo $error; 
	} 
	
	mysql_close();
?>