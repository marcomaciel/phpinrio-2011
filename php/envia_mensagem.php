<?php
	//Prepara as variáveis de aplicação, armazenando os valores serializados em um arquivo temporário.
	require_once("application.class.php");
	
	//Obtem o valor da variável mensagem através do método POST
	$mensagem = $_POST['mensagem'];
	
	//Grava o valor da variável em um arquivo temporário usando a classe 'application.class.php'
	Application::setVar("mensagem",$mensagem);
	
	//Retorna para a página principal.
	$redirect = "./";
	header("location:$redirect");
	
?>


