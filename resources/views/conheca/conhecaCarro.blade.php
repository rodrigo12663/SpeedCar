@extends('../../includes.include_menu')
@extends('layout.app_conheca')

  
<link rel="shortcut icon" href="../../assets/css/imagens/logos.ico" >

<div style="background: white; " class="d-flex justify-content-center py-1 fixed-top  ">

  <a class="navbar-brand justify-content-center sticky-top" href="">
    <img src="../../assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
  </a>
</div>

  @section('content')
            
              
  <div class="container">
    <div class="row">
      <div class="col-sm py-5">
        <div id="part1" class="py-5">
          <h2 id="texts">{{$veiculoos->name}}</h2>
         </div>

        <div id="part1" class="py-5">

          <img src="{{url('storage/veiculos/'.$veiculoos->imagem)}}"  class="img-fluid " alt="...">
         </div>
      </div>
     
      <div class="col-sm py-5">
            <div class="container-contact100 py-5">
              <div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>   
              <div class="wrap-contact100">
                  <h3>R$ {{$veiculoos->preco}}</h3><br>
                  <p id="texto-financiamento" class=""> <b>Faça a sua simulação GRATUITA</b> </p>
                  <p id="texto-financiamento">Quer saber quanto saíra seu carro no final da compra? Faça agora sua simulação, escolha o carro, aquele que é ideal para você</p> 
                  <a id="btn-financiamento" href="{{url("financiamento/$veiculoos->id")}}" class="btn">Financiamento</a>
              </div>
            </div>
      </div>
    </div>
  </div>



   
 
  
  
  
  
  
    
  
  
             
  </div>
      
  @endsection
          

           

  

