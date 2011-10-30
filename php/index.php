<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <title>PHP, Robótica e Arduino</title>

	<style type="text/css">		
		.large { 
		  font-family:arial; 
		  font-size: 1.8em; 
		}
		.mensagem { 
		  font-family:arial; 
		  font-size: 0.8em; 
		  margin: 20px;
		  background: #CFC;
		  width: 300px; 
		  text-align: center;
		}
		body {
			font-family:arial; 
			font-size: 1em; 
		}		
	</style>
	
	<script language="javascript" type="text/javascript">	
		function enviaMensagem(valor){
			document.getElementById("mensagem").value = valor;
			document.forms[0].submit();
		}
   </script> 
  </head>

  <body>
    <h1>PHP, Robótica e Arduino</h1>
        
	<form name="formComandos" method="post" action="envia_mensagem.php">
	Comandos:
	    <table>
	      <tr>
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(1)" alt="Up" id="up" src="arrow_up.png"></a></td>
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(2)" alt="Down" id="down" src="arrow_down.png"></a></td>
	
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(3)" alt="Left" id="left" src="arrow_left.png"></a></td>
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(4)" alt="Right" id="right" src="arrow_right.png"></a></td>
 
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(5)" alt="Open" id="open" src="open.jpg"></a></td>
	        <td onmouseover="this.style.border='1px solid #0000FF';" onmouseout="this.style.border='1px solid #FFFFFF';"><a href="#"><img onclick="enviaMensagem(6)" alt="Close" id="close" src="close.jpg"></a></td>
	      </tr>  	      
	    </table>
		<input type="hidden" value="" id="mensagem" name="mensagem" size="20">
    </form>
  </body>
</html>
