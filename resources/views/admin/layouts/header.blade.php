<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') - {{config('app.name')}} </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://kit.fontawesome.com/33101b64c0.js" crossorigin="anonymous"></script>
</head>   
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('clientes.index')}}">
                <img src="https://sitezindocarlos.vercel.app/image/logo-azul-com-texto.png" alt="Logo" width="220.767px"
                height="85.8px">   
            </a>
        </div>
        <div>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="btn btn-link" type="submit">Logout</button>
            </form>
        </div>
    </nav>
    <section class="card-wrapper">
        <section class="content1" class="background">
            <div class="content-title">
                <div class="container-fluid">
                    <ul class="nav flex-column nav justify-content-left ConteudoCard" id="ConteudoCard">
                        
                        <li class="nav-item">
                            <span class="align"> USUÁRIOS </span>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('clientes.visualizar')}}">
                                Clientes
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('dids.tabela')}}">
                                Dids                                    
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('ramais.tabela')}}">
                                Ramais
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('cadastro.register')}}">
                                Registrar Novo Usuário
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('vinculo')}}">
                                Clientes Com Vinculo
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
