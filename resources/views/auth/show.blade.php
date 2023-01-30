<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  <link rel="stylesheet" href="/css/styles.css">
  <script src="https://kit.fontawesome.com/33101b64c0.js" crossorigin="anonymous"></script>
  <title>Document</title>
  <style>
    .table-1{
      margin-top: 70px;
      padding-right: 70px;
      padding-left: 50px;
      padding-bottom: 30px;
      margin-left: 20px;
      margin-right: 20px;
      box-shadow: 10px 10px 7px rgba(0, 0, 0, 0.409)
    }
    .table{
      padding-right: 259px;
      padding-left: 100px;
      padding-bottom: 30px;
      margin-left: 20px;
      margin-right: 20px;
    }
  </style>
</head>
<body>
  <div class="table-1">
    <form action="{{route('user.csv')}}" method="GET">
      <button id="" class="btn btn-warning btn-sm " type="submit">CSV</button>
      <a  class="btn btn-primary" href="{{route('clientes.index')}}">Voltar</a>
    </form>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($users as $user)
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <form action="" method="POST"> {{-- Validar os Botoes de envios eles estao com # --}}
            @csrf
            <td>
              <input type="hidden" name="_method" value="DELETE">
              <button class="btn btn-danger btn-sm " type="submit">Excluir</button>
            </td>
          </form>                                    
          <form action="" method="GET" >                                       
            <td>
              <input type="hidden" name="_method" value=" ">
              <button id="button{{$user->id}}" class="btn btn-success btn-sm" type="submit">Editar</button>
            </td>
          </form>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>