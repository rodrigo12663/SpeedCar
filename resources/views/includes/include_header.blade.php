@extends('layout.app')
<script>
  $('.carousel').carousel({
  interval: 50
});
  
</script>



@section('logo')
<div style="background: white; " class="d-flex justify-content-center py-1 fixed-top  ">

  <a class="navbar-brand justify-content-center sticky-top" href="">
    <img src="assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
  </a>
</div>
@endsection



@section('menu')
    @include('includes.include_menu')
@endsection 

@section('content')
<center>
          <div id="hea" class="justify-content-center">
          <div  id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                 <img id="img" src="assets/css/imagens/of2.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img id="img" src="assets/css/imagens/of3.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img id="img"  src="assets/css/imagens/of5.png" class="d-block w-100 img-fluid" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
</center>
@endsection


