<?php
	
	
	$podeinserir=true;
	$nome = $_POST['nome'];
	$codigo =  $_POST['meucodigo'];
	$turma = $_POST['turma'];
	$opcao1 = $_POST['opcao1'];
	$opcao2 = $_POST['opcao2'];
	
	
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	
	/*configurco de cesso o bnco de ddos*/
	$nome_banco = "bd_centro_interesse";
	
	$conexao = mysql_connect($servidor, $usuario, $senha);
	
	/*verifica se a conexao realmente foi criada*/
	/*se (nao conexao) entao, ou seja, conexao e falsa*/
	
	if (!$conexao) {
		 die('Não foi possível conectar: ' . mysql_error());
	}else{/*senao*/
		 "<h1>Conectou</h1>";
	}
	
	/*Selecione o banco de dados ou morra*/
	$banco = mysql_select_db($nome_banco, $conexao) or die ("Não foi possível conectar ao banco de dados");
	
		/*Encerra a conexao*/
		
		if (mysql_errno()) { 
		  $error = "MySQL error ".mysql_errno().": ".mysql_error()."\n<br>Quando executou:<br>\n$comandosql\n<br>"; 
		  echo $error; 
		}else{
			echo "<h1>Cadastro Realizado com sucesso</h1>";
			echo "<a href='inscricao.html'>Clique aqui para realizar uma nova inscricao</a>";
		}
	mysql_close();
?>