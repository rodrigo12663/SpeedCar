<link rel="stylesheet" href="assets/css/style_ofertas.css">

<div class="container my-5">
            <section class="testes">
				<div  class="d-flex justify-content-center">...
				<ul id="tab" class="nav nav-tabs md-tabs" id="myTabMD" role="tablist">
					<li class="nav-item waves-effect waves-light">
					<a  class="nav-link active" id="home-tab-md" data-toggle="tab" href="#home-md" role="tab" aria-controls="home-md" aria-selected="true">Mais vendido</a>
					</li>
					<a href="#teste">
						<li class="nav-item waves-effect waves-light">
						<a id="ul-2" class="nav-link" id="profile-tab-md" data-toggle="tab" href="#profile-md" role="tab" aria-controls="profile-md" aria-selected="false">Utilitário</a>
						</li>
					</a>
              </ul>
				</div>
              <div class="tab-content " id="myTabContentMD">
                <div class="tab-pane fade show active" id="home-md" role="tabpanel" aria-labelledby="home-tab-md">
					<CENTER>
						<div class="ofertas ">
							@foreach ($veiculo as $veiculos)
							<div class="card" style="width: 10rem; margin: 30px; border: none;">
							
							
							<img class="card-img-top" src="{{url('storage/veiculos/'.$veiculos->imagem)}}" alt="Imagem de capa do card">
							  <div class="card-body">
								  
								<h6 class="card-title">{{$veiculos->name}}</h6>
								<p>
									a partir de 	<br><b>R$ {{$veiculos->preco}}</b></p>
							
										
							  </div>
							  <div  class="d-flex justify-content-center">
								<a id="button-prod"  href="{{url("veiculo/$veiculos->id/carro")}}" class="btn  ">Conheça+</a>
								<a id="button-prod" style="margin-left: 10px;" href="{{url("veiculo/$veiculos->id/form")}}" class="btn  ">Interesse</a>	
							</div>
							 
							</div> 
							@endforeach
							
						</div>
					</center>
                </div>
                <div class="tab-pane fade" id="profile-md" role="tabpanel" aria-labelledby="profile-tab-md">
					<CENTER>
						<div class="ofertas ">
							@foreach ($veiculoT as $veiculoss)
							<div class="card" style="width: 10rem; margin: 30px; border: none;">
							
							
							<img class="card-img-top" src="{{url('storage/veiculos/'. $veiculoss->imagem)}}" alt="Imagem de capa do card">
							  <div class="card-body">
								  
								<h6 class="card-title">{{ $veiculoss->name}}</h6>
								<p>
									a partir de 	<br><b>R$ {{ $veiculoss->preco}}</b></p>
							
										
							  </div>
							  <div  class="d-flex justify-content-center">
								<a id="button-prod"  href="{{url("veiculo/$veiculoss->id/carro")}}" class="btn  ">Conheça+</a>
								<a id="button-prod" style="margin-left: 10px;" href="{{url("veiculo/ $veiculoss->id/form")}}" class="btn  ">Interesse</a>	
							</div>
							 
							</div> 
							@endforeach
							
						</div>
					</center>
                </div>     
            </section>
</div>




