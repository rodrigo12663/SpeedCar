<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/PaginaContato.css">
<link rel="shortcut icon" href="assets/css/imagens/logos.ico" >

<title>Speed Car</title>
</head>
<body>
	<div style="background: white; " class="d-flex justify-content-center py-1 fixed-top  ">

		<a class="navbar-brand justify-content-center sticky-top" href="">
		  <img src="assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
		</a>
	</div>
	@include('includes.include_menu')
	<div class="containerr" >
		<div class="formBx">
			<form method="POST" action="{{url("/contato")}}">
				@csrf
				<h2>Envie-nos a sua mensagem</h2>
					<div class="inputBox">
						<input type="text" name="nome" required="required">
						<span>Nome Completo</span>
					</div>
					
					<div class="inputBox">
						<input type="text" name="email" required="required">
						<span>Email</span>
					</div>
					<div class="inputBox">
						<input type="text" name="telefone" required="required">
						<span>Telefone</span>
					</div>
					<div class="inputBox">
						<textarea required="required" name="msg"></textarea>
						<span>Digite a sua mensagem...</span>
					</div>
					<div class="inputBox">
						<input type="submit" value="enviar" name="">
					</div>
	
			</form>
		</div>
		<div class="imgBx">
			<img src="assets/css/imagens/cruze2019.png">
		</div>
	</div>
	

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
@include('flash::message')
</body>
</html>