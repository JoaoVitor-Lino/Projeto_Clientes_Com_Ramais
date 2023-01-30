@include('admin.layouts.header')
@if (session('messages'))
<div class="alert alert-success" >
    {{ session('messages') }}
</div>
@endif

<section class="card">
    <div class="card">       
        <div class="card-header">
            <form action="{{route('ramais.create')}}" method="get">
                <td><button class="btn btn-success btn-sm" type="submit">Criar Ramais</button></td>
            </form>
            <form action="{{route('ramais.csv')}}" method="GET">
                <button id="" class="btn btn-warning btn-sm " type="submit">CSV</button>
            </form>
        </div>
        <section class="content" class="background">
            <div class="content-title nav flex-column nav justify-content-left">
                <div class="container-fluid">
                    <ul class="nav flex-column nav justify-content-left ConteudoCard" style="margin-left: 1px;margin-right: 1px;">
                        <li class="nav-item">
                            <h3>RAMAIS</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Ramais</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Bina</th>
                                        <th scope="col">Cliente</th>
                                    </tr>
                                </thead>                            
                                <tbody>
                                    <tr>
                                        @foreach ($cliente as $key => $dados)
                                        <th scope="row">{{$dados->id}}</th>
                                        <td>{{$dados->ramal}}</td>
                                        <td>{{$dados->nomes}}</td>
                                        <td>{{$dados->tipo}}</td>
                                        <td>{{$dados->bina}}</td>
                                        <td>{{$dados->nome}}</td>                                    
                                        <form action="{{route('ramais.destroy', $dados->id)}}" method="POST">
                                            @csrf
                                            <td>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                            </td>
                                        </form>                                
                                        <form action="{{route('ramais.edit', $dados->id)}}" method="get">
                                            <td>
                                                <input type="hidden" name="id" value="{{$dados->id}}">
                                                <button class="btn btn-primary btn-sm" type="submit">Editar</button>
                                            </td>
                                        </form> 
                                    </tr>
                                        @endforeach 
                                </tbody>
                            </table>     
                        </li>        
                    </ul>
                </div>
            </div>
        </section>
    </div>
</section>   
     
</body>
</html>
