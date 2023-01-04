@include('admin.clientes.partials.header')
<section class="card">
    {{-- @if ($errors->any())
        <div class="btn btn-danger btn-sm ">
            @foreach ($errors->all() as $error)
                <p>{{$error}}</p>
            @endforeach
        </div>    
    @endif --}}

    @if (session('messages'))
        <div class="btn btn-success">
            {{session('messages')}}
        </div>
    @endif

    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">
                <form class="form-floating" action="{{route('clientes.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="c" value="c">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Clientes</h3>

                        <div class="form-floating">

                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{ old('nome') }}">
                            <label for="floatingInputValue">Nome</label>
                            @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="number" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value="{{ old('telefone') }}">
                            <label for="floatingInputValue">Telefone</label>
                            @error('telefone')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            <label for="floatingInputValue">Email</label>
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{ old('endereco') }}">
                            <label for="floatingInputValue">Endereço</label>
                            @error('endereco')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">

                            <select class="form-select form-floating @error('tipo') is-invalid @enderror" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo" value="{{ old('tipo') }}" required >
                                <option value="0">Selecione</option>
                                <option value="Fisico">Fisico</option>
                                <option value="Juridico">Juridico</option>

                            </select>
                            <label for="floatingSelect">Tipo</label>
                            @error('tipo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value="{{ old('documento') }}">
                            <label for="floatingInputValue">CPF/CNPJ</label>
                            @error('documento')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="{{route('clientes.visualizar')}}">Voltar</a>
                    </div>
                    
                </form>
            </div>    
        </div>        
    </section>

</html>