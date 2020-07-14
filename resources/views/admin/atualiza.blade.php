@extends('layout_admin.app')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">



@section('content')
<div class="d-flex justify-content-center py-5">

  <table style="width:800px; " class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Nome</th>
        <th scope="col">preco</th>
        <th scope="col">Ação</th>
        <th scope="col">Ação</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach ($veiculo as $veiculos)
      <tr>
        <th scope="row">{{$veiculos->id}}</th>
        <td>{{$veiculos->name}}</td>
        <td>{{$veiculos->preco}}</td>
       <td> <a href="{{url("veiculo/$veiculos->id/edit")}}"><button type="button" class="btn btn-warning">Atualizar <i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></td></a>

      <td> <a href="{{url("veiculo/deletar/$veiculos->id")}}"><button type="button" class="btn btn-danger">Deletar <i class="fa fa-trash-o" aria-hidden="true"></i></button></td></a>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection
 
  