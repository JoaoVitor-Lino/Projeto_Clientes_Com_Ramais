@include('admin.layouts.header')
<section class="card">
    
    <form action="{{route('clientes.vinculoCsv')}}" method="GET">
        <button id="" class="btn btn-warning btn-sm " type="submit">CSV</button>
    </form>
    <div class="container-fluid"> 
        @foreach ($clientes as $cliente)
        <ul class="nav flex-column nav justify-content-left ConteudoCard"
        style="margin-left: 1px;margin-right: 1px;">
        <li class="nav-item">
            
            <h3>Cliente: {{$cliente->nome}}</h3>
            
            <div class="card-header">
                <section class="content" class="background">
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <h4>Ramais: </h4>
                                </th>
                                <th scope="col">ID</th>
                                <th scope="col">Ramal</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Bina</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($cliente['ramais'] as $ramais)
                                <th scope="row"></th>
                                <th scope="row">{{$ramais->id}}</th>
                                <th scope="row">{{$ramais->ramal}}</th>
                                <th scope="row">{{$ramais->nomes}}</th>
                                <th scope="row">{{$ramais->tipo}}</th>
                                <th scope="row">{{$ramais->bina}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                        <thead>
                            
                            <tr>
                                <th>
                                    <h4>Dids:</h4>
                                </th> <br>
                                <th scope="col">ID</th>
                                <th scope="col">Número</th>
                                <th scope="col">Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($cliente['dids'] as $dids)
                                <th scope="row"></th>
                                <th scope="row">{{$dids->id}}</th>
                                <th scope="row">{{$dids->numero}}</th>
                                <th scope="row">{{$dids->descricao}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                </li>
            </ul>
            @endforeach 
            
        </section>
    </div>
</section>
</body>
</html>