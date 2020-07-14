<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/css/style_menu.css">
<link rel="stylesheet" href="../../assets/css/form.css">
<link rel="shortcut icon" href="../../assets/css/imagens/logos.ico" >
<title>Speed Car</title>
</head>
<body>
  <div style="background: white; " class="d-flex justify-content-center py-1 fixed-top  ">

		<a class="navbar-brand justify-content-center sticky-top" href="">
		  <img src="../../assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
		</a>
	</div>
	@include('includes.include_menu')


<div class="d-flex flex-row bd-highlight mb-3 py-5">
    <div class="p-2 bd-highlight">
        <div class="img-nome px-5 py-5">
          <h1 id="text">Produto selecionado:</h1>
          <hr>
          <h3>{{$veiculoos->name}}</h3>
          <img id="imgs" class="card-img-top" src="{{url('storage/veiculos/'.$veiculoos->imagem)}}" alt="Imagem de capa do card">
        </div>
    </div>
    <div id="form" class="p-2 bd-highlight py-5">
          
	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<form method="POST" action="{{url("/cliente/$veiculoos->id")}}" class="contact100-form validate-form">
			@csrf
				<h2 class="contact100-form-title px-3">Tenho interesse  </h2>
				<label>Como podemos entrar em contato com você?</label>

		<div class="wrap-input100 validate-input py-3" >
					<label class="px-3">Nome</label>
					<input class="input100" type="text" name="nome" placeholder="Seu Nome">
					
     	</div>

        <div class="wrap-input100 validate-input" >
					<label  class="px-3">Email</label>
					<input class="input100" type="text" name="email" placeholder="Seu email">
					
        </div>
        
        <div class="wrap-input100 validate-input" >
					<label class="px-3">CPF</label>
					<input class="input100" type="text" name="cpf" placeholder="Coloque seu cpf">
					
				</div>

				<div class="wrap-input100 validate-input" >
					<label class="px-3">Telefone</label>
					<input class="input100" type="text" name="telefone" placeholder="Telefone">
					
				</div>


				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar
					</button>
				</div>
			</form>

			
		</div>
	</div>
    </div>

</div>
@include('flash::message')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>


@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $erro)
            <li>{{$erro}}</li>
        @endforeach

        </ul>

    </div> 
@endif