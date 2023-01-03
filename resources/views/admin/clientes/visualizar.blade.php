@include('admin.clientes.partials.header')
@section('title', 'Tabela Clientes')


<section class="card">
    <div class="card">
        <div class="card-header">
            <form action="{{route('clientes.create')}}" method="post">
                @csrf
                <td><button class="btn btn-success btn-sm" type="submit">Criar Cliente</button></td>
            </form>
        </div>
        
        <section class="content" class="background">
            <div class="content-title nav flex-column nav justify-content-left">
                <div class="container-fluid">
                    
                    <ul class="nav flex-column nav justify-content-left ConteudoCard"
                    style="margin-left: 1px;margin-right: 1px;">
                    <li class="nav-item">
                        <h3>CLIENTES</h3>
                        
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Telefone</th>
                                    <th scope="col">E-mail</th>
                                    <th scope="col">Endereço</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Documento</th>
                                    
                                </tr>
                                
                            </thead>
                            
                            <tbody>
                                <tr>

                                    @foreach ($clientes as $key=> $dados)
                                    
                                        <th scope="row"> {{$dados->id}}</th>
                                        <td> {{$dados->nome}}</td>
                                        <td> {{$dados->telefone}}</td>
                                        <td> {{$dados->email}}</td>
                                        <td> {{$dados->endereco}}</td>
                                        <td> {{$dados->tipo}}</td>
                                        <td> {{$dados->documento}}</td>
                                        
                                        <form action="#" method="POST"> {{-- Validar os Botoes de envios eles estao com # --}}
                                            <td>
                                                <input type="hidden" name="id" value=" {{ $dados['id']}}>">
                                                <button class="btn btn-danger btn-sm " type="submit">Excluir</button>
                                            </td>
                                        </form>
                                        
                                        <form action="#" method="POST">
                                            <td>
                                                <input type="hidden" name="id" value=" {{ $dados['id']}}>">
                                                <button class="btn btn-success btn-sm" type="submit">Editar</button>
                                            </td>
                                        </form>
                                </tr>
                                @endforeach
                            </div>
                            
        </section>
    </body>
</html>

                        