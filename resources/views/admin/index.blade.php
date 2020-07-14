@extends('layout_admin.app')

@section('content')

<div class="container d-flex justify-content-lg-center ">
    
  <div id="cadastro" class="d-flex justify-content-center ">  
        @if(isset($veiculoo))
            <form class="px-3" method="POST" action="{{url("veiculo/$veiculoo->id")}}" enctype="multipart/form-data">
            @method('PUT');
        @else
             <form class="px-3" method="POST" action="{{url('/veiculo')}}" enctype="multipart/form-data">
        @endif
        @csrf 
                  @if(isset($veiculoo))
                  <div class="container-fluid py-1"> <h1 id="text-title">Editar</h1></div>
                

                  @else
                      <div class="container-fluid py-1"> <h1 id="text-title">Cadastrar</h1></div>
                  @endif
                <div class="form-group row py-3 ">
                      <label for="staticEmail" class="col-sm-2 col-form-label">Nome do carro</label>
                      <div class="col-sm">
                            @if(isset($veiculoo))
                                <input id="inputT" name="name" type="text" value="{{$veiculoo->name}}" class="form-control" required >
                            
                            @else
                                  <input id="inputT" name="name" type="text" class="form-control"  >
                            @endif
                        
                      </div>
                </div>
                <div class="form-group row ">
                      <label for="inputPassword" class="col-sm-2 col-form-label">Preço do veículo</label>
                      <div class="col-sm-3">
                              @if(isset($veiculoo))
                                  <input id="inputT" name="preco" type="text" value="{{$veiculoo->preco}}" class="form-control" required >
                              
                              @else
                                    <input id="inputT" name="preco" type="text" class="form-control"  >
                              @endif
                        </div>
                </div>
      
                <div class="form-group row py-3">
                  
                  <label for="staticEmail" class="col-sm-2 col-form-label">Imagem</label>            
                  <div class="col-sm">
                        @if(isset($veiculoo))
                        <label class="custom-upload ">
                            <li id="text-upload"> Upload file</li>
                            <input id="inputTs" name="foto" type="file" onchange="previewImages();" value="{{$veiculoo->imagem}}" class="form-control" >
                        </label>
                        <li><img id="imgs" class="card-img-top mx-4" src="{{url('storage/veiculos/'.$veiculoo->imagem)}}" alt="Imagem de capa do card"></li>
                        @else
                        <label class="custom-upload">
                              <li id="text-upload">Upload file</li>
                              <input id="inputTs" name="foto" onchange="previewImage();" type="file" class="form-control">
                        </label>
                        <li><img id="img" class="card-img-top mx-4" src="" alt="Imagem de capa do card"></li>
                        <
                        @endif
                  </div>
                </div>
                  
                      <script type="text/javascript">
                            function previewImage(){
                                  var imagem= document.querySelector('input[name=foto]').files[0];
                                  var preview= document.querySelector('img[id=img]');
                                  var reader= new FileReader();
                                  reader.onloadend= function(){
                                    preview.src=reader.result;
                                  }
                                  if(imagem){
                                      reader.readAsDataURL(imagem);
                                  }
                                  else{
                                        preview.src="";

                                  }
                            }
                            var preview= document.querySelector('img[id=img]');
                            preview.src="assets/css/imagens/onix.png";
                            function previewImages(){
                                  var imagem= document.querySelector('input[name=foto]').files[0];
                                  var preview= document.querySelector('img[id=imgs]');
                                  var reader= new FileReader();
                                  reader.onloadend= function(){
                                    preview.src=reader.result;
                                  }
                                  if(imagem){
                                      reader.readAsDataURL(imagem);
                                  }
                                  else{
                                        preview.src="";

                                  }
                            }
                      </script>
                <div class="form-group row ">
                        <label for="input" class="col-sm-2 col-form-label">Descrição</label>
                        <div class="col-sm-3">
                                @if(isset($veiculoo))
                                           <textarea required="required" name="msg"></textarea>
                                
                                @else
                                           <textarea required="required" name="msg"></textarea>
                                @endif
                          </div>
                </div>
                <div class="d-flex justify-content-lg-center">
                    <div class="form-group row  ">
                  
                      <div class="col-sm">
                        
                        @if(isset($veiculoo))
                          <input type="submit" class="btn btn-primary" value="Editar">
                        
                        @else
                        <input type="submit" class="btn btn-primary" value="Cadastrar">
                        @endif 
                      </div>
                </div>
                </div>
              </form>
              <div class="imgBx">
                
                  @if(isset($veiculoo))
                        <img src="../../assets/css/imagens/duster.png">
                          
                  @else
                        <img src="../../assets/css/imagens/oroch.png">  
                  @endif
              </div>
            </div>
      </div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $erro)
            <li> produto já existe</li>
        @endforeach

        </ul>

    </div> 
@endif