<?php
	require_once("application.class.php");
	
	
	$mensagem = $_POST['mensagem'];
	Application::setVar("mensagem",$mensagem);

	session_start();
	$_SESSION['mensagem'] = $_POST['mensagem'];
	
	$redirect = "./";
	header("location:$redirect");
	
?>


