<?php
	//Prepara as variáveis de aplicação, armazenando os valores serializados em um arquivo temporário.
	require_once("application.class.php");
	
	//Obtem a o valor da variavel.
	$mensagem = Application::getVar("mensagem");
	
	//Exibe o valor obtido
	echo $mensagem;
	
	//Limpa o valor na variavel. Faz com que o comando seja executado somente uma vez depois de lido.
	Application::setVar("mensagem","");
?>