<?php 	
	//Obtem o valor informado pelo arquivo referenciado.	
	$mensagem = file_get_contents('http://mmaciel.com.br/phpinrio/obtem_mensagem.php');	
	
	//Abre comunicação com a porta serial.
	$portaserial = fopen('/dev/tty.usbserial-A600bWE7', 'w');
	
	//Em alguns casos a Arduino pode reiniciar, por isso
	//é bom esperar para enviar informação depois de conectar
	sleep(3);
	
	//Envia mensagem para a porta seral.
	fwrite($portaserial, $mensagem);
	
	//Espera para que o dado enviado pelo PHP chegue até a Arduino
	sleep(1);
	
	//Fecha comunicação com a porta serial.
	//fclose($portaserial, mensagem);
?>