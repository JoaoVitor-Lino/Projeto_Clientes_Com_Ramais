@include('admin.layouts.header')

@if (session('messages'))
<div class="alert alert-success" >
    {{ session('messages') }}
</div>
@endif
<section class="card">
    <div class="card">
        <div class="card-header">
            <form action="{{route('dids.create')}}" method="get">     
                <td><button class="btn btn-success btn-sm" type="submit">Criar Dids</button></td>
            </form>
            <form action="{{route('dids.csv')}}" method="GET">
                <button id="" class="btn btn-warning btn-sm " type="submit">CSV</button>
            </form>
        </div>
        <section class="content" class="background">
            <div class="content-title nav flex-column nav justify-content-left">
                <div class="container-fluid">
                    <ul class="nav flex-column nav justify-content-left ConteudoCard"
                    style="margin-left: 1px;margin-right: 1px;">
                    <li class="nav-item">
                        <h3>DIDS</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Número</th>
                                    <th scope="col">Descrição</th>
                                    <th scope="col">Cliente</th>
                                </tr>
                            </thead>                         
                            <tbody>
                                <tr>
                                    @foreach ($cliente as $key => $dados)                                 
                                    <th scope="row">{{$dados->id}}</th>
                                    <td> {{$dados->numero}}</td>
                                    <td>{{$dados->descricao}}</td>             
                                    <td>{{$dados->nome}}</td>
                                    <form action="{{route('dids.destroy', $dados->id)}}" method="POST">
                                        @csrf
                                        <td>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                        </td>
                                    </form>                                    
                                    <form action="{{route('dids.edit', $dados->id)}}" method="get">
                                        <td>
                                            <input type="hidden" name="id" value=" {{$dados->id}}">
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