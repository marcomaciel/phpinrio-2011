<?php 
	require_once("application.class.php");
	
	$mensagem = Application::getVar("mensagem");
	echo $mensagem;
?>