<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>CONTATO</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<link href="css/estilo1.css" rel="stylesheet">
		<link rel="shortcut icon" href="img/favicon/icone.ico">
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Arsenal:ital@1&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Capriola&display=swap" rel="stylesheet">
	</head>
	<body>	
		<div id="topo">
			<div id="logo">
				<img src="img/logo/logo.jpg" height="150px" width="100%" title="Foto logo da página"></img>
			</div>	
			<BR><BR>
			<H1>
				Contato
			</H1>
		</div>
		<nav>
			<BR><BR><BR>
			<?php
				include "php/menu.inc";
			?>
		</nav>	
		<div id="corpo">
			<BR><BR><BR>
			<H2 style="text-shadow: none; font-size: 22px">
				Por favor deixe sua mensagem sobre o que achou do site, assim podemos trazer melhorias!! 
				<BR>
				Espero que tenha gostado do site!!			
				<BR>
				Obrigada pela sua atenção!! 
			</H2>
			<BR><BR><BR>
			<form action="https://formspree.io/f/mnqldgew" method="POST">
				<H3 style="text-align: center;">
					NOME:
					<input type="text" name="nome" placeholder="DIGITE SEU NOME">
					<BR><BR>
					E-MAIL:
					<input type="email" name="email" placeholder="DIGITE SEU E-MAIL">
					<BR><BR>
					MENSAGEM:
					<textarea name="mensagem" rows="10" cols="50" placeholder="DIGITE SUA MENSAGEM"></textarea>
					<BR><BR>
					<input type="submit" value="ENVIAR">
				</H3>
			</form>	
		</div>
	</body>
	<footer>
		<H6>
			copyright ©2021, Fernanda Ayres Ruaro
		</H6>
	</footer>
</html>