<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" href="../../assets/css/financiamento.css">
<title>Speed Car</title>
</head>
<body>
    <div style="background: white; " class="d-flex justify-content-center py-1 fixed-top  ">

		<a class="navbar-brand justify-content-center sticky-top" href="">
		  <img src="../../assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
		</a>
	</div>
	@include('../../includes.include_menu')
   

       <div class="containerr" >
          
            
		<div class="formBx">
			<form method="POST" action="{{url("/financiamento/calculo")}}">
				     @csrf
                    <h2>Financiamento</h2>    
					<div class="inputBox ">
							@if (isset($veiculo))
							<input type="text" id="text" name="valorCarro" required="required" value={{ $veiculo->preco}}>  
								
							@else
							
							<input type="text" id="text" name="valorCarro" required="required" value={{ $veiculost['preco']}}> 
							@endif 
                        <span>Valor</span>
					</div>
					
					<div class="inputBox "> 
						<input type="text" name="taxa" required="required">
						<span>Taxa</span>
                        
					</div>
					<div class="inputBox">
						<input type="text" name="nparcela" required="required">
						<span>Número de parcelas</span>
                       
					</div>
					<ul>
						<li>
							<div class="inputBox">
								<input type="submit" value="enviar" name="">
							</div>
						</li>

						<li>
							<div class="inputBox">
								<a id="pdf" href="/financiamento/pdf">pdf</a>
							</div>
						</li>
					</ul>
            </form>
            <div class="col-sm-5">
            <form method="POST" action="{{url('/preco')}}">
                	@csrf
					<input class="input100" type="text" name="pesquisa" placeholder="pesquisar">
					<div class="py-2">
						<button id="pdf" type="submit"  class="px-4" href="/financiamento">ok</button>
					</div>
            </form>
            </div>
			</div>
		<div class="imgBx">
			<img src="../../assets/css/imagens/camarocupe.png">
		</div>
		
	</div>
	@include('flash::message')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>

</body>
</html>



