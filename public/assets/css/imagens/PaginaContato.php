<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="PaginaContato.css">
</head>
<body> 
	<section>
	<div class="container">
		<div class="contactinfo">
			<div>
				<h2>Contato</h2>
				<ul class="info">
					<li>
						<span><img src="location.png"></span>
						<span>Rua 30 Maracanaú,
						    Jereissati 1, Ceará</span>
					</li>
					<li>
						<span><img src="email.png"></span>
						<span>speedcar@auto.com</span>
					</li>
					<li>
						<span><img src="call.png"></span>
						<span>(00) 0000-0000</span>
					</li>
				</ul>
			</div>

				<ul class="sci">
					<li><a href=""><img src="01.png"></a></li>
					<li><a href=""><img src="02.png"></a></li>
					<li><a href=""><img src="01.png"></a></li>
					<li><a href=""><img src="02.png"></a></li>
				</ul>
			
		</div>
		<form method="POST" action="enviar_smg.php">
		<div class="contactform">
			<h2>Envie-nos a sua mensagem</h2>
			<div class="formBox">
				<div class="inputBox w50">
					<input type="text" name="Primeiro" required>
					<span>Primeiro nome</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="Segundo" required>
					<span>Segundo nome</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="Email" required>
					<span>Email</span>
				</div>
				<div class="inputBox w50">
					<input type="text" name="telefone" required>
					<span>telefone</span>
				</div>
				<div class="inputBox w100">
					<textarea nome="mensagem" required></textarea>
					<span>Digite aqui a mensagem.....</span>
				</div>
				<div class="inputBox w100">
					<input type="submit" value="enviar">
				</div>

				
			</div>
		</div>

	</div>
	</form>
</section>
<footer>
	<p style="color: white; font-size: 20px;" class="copyright">Direitos Reservado | @SpeedCar_Automoveis | 02/06/2020|</p>
</footer>
</body>
</html>