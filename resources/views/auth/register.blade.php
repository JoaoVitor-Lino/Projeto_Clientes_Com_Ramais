<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="/css/styles.css">
    <script src="https://kit.fontawesome.com/33101b64c0.js" crossorigin="anonymous"></script>
</head>
<body>
    @if (session('messages'))
<div class="alert alert-success" >
    {{ session('messages') }}
</div>
@endif
<section class="card">
    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">
                <form class="form-floating" action="{{route('cadastro.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="c" value="c">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Registrar-se</h3>
                        
                        <div class="form-floating">   
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            <label for="floatingInputValue">Nome do usuário</label>
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">     
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            <label for="floatingInputValue">Email do usuário</label>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">    
                            <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="">
                            <label for="floatingInputValue">Senha</label>
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <br>
                            <div class="form-floating">
                                <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" value="">
                                <label for="floatingInputValue">Confirme sua senha</label>
                                @error('password_confirmation')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Cadastro</button>

                    </div>
                </form>
            </div>    
        </div>  
    </section>      
</section>

</section>   
</body>
</html>