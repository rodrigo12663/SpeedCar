<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Speed Car</title>
</head>
<body>
        <div class="text-center">
                  <img src="assets/css/imagens/logo_oficial.png" alt="..."  width="100" height="50" class="img">
        </div>
        <h1 class="px-4">{{auth()->user()->name}}</h1>
       <div class="d-flex justify-content-center  px-4">
            <table style="width:740px; " class="table table-dark">
                  <thead>
                      <tr>
                            <th scope="col">Valor Financiado</th>
                            <th scope="col">Número de parcela</th>
                            <th scope="col">Taxa</th>
                            <th scope="col">pgto</th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($financiamentos as $financiamento)
                      <tr>
                            <td>{{$financiamento->valor}}</td>
                            <td>{{$financiamento->nparcela}}</td>
                            <td>{{$financiamento->taxa}} </td>
                            <td>{{number_format($financiamento->pgto , 2, '.', '')}} </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
        </div>
</body>
</html>