<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$nome = $_POST["first_name"];
		$sobrenome = $_POST["last_name"];
		$email = $_POST["email"];
	}
	
	/*echo "CADASTRO COMPLETO!<br><br>";
	echo "NOME: {$nome}<br>";
	echo "SOBRENOME: {$sobrenome}<br>";
	echo "E-MAIL: {$email}<br><br>";
	echo "Processo finalizado.";*/
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<style>
 		div.pai{
 			box-shadow: 1px 1px 2px black;
 			width: 599px;
 			height: 439px;
 			margin: 0 auto;
 			background-color: rgb(242, 243, 247);
 			color: rgb(99, 99, 99);
 			border-radius: 15px;
 			font-family: "Roboto", sans-serif;
 		}
 		body{
 			background-color: rgb(99, 115, 138);
 		}
 		img{
 			height: 200px;
 			width: 220px;
 			margin-left: 400px;
 			padding-top: -110px;
 		}
 		h1{
 			text-align: center;
 			padding-top: 50px;
 			color: black;
 		}
 		h3{
 			margin-left: 50px;
 			padding-top: 30px;
 		}
 	</style>
 </head>
 <body>
 	<div class="pai">
 		<h1>Cadastro Completo</h1>
 		<h3><?php echo "NOME: {$nome}<br>"; ?> </h4>
 		<h3><?php echo "SOBRENOME: {$sobrenome}<br>"; ?> </h4>
 		<h3><?php echo "E-MAIL: {$email}<br><br>"; ?> </h4>
 		<img src="certo.png">
 	</div>
 </body>
 </html>