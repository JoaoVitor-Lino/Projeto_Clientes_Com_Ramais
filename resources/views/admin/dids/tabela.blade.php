@include('admin.layouts.header')
@if (session('messages'))
    {{session('messages')}}
@endif
<section class="card">
    <div class="card">
        
        <div class="card-header">
            <form action="{{route('dids.create')}}" method="get">
                @csrf
                <td><button class="btn btn-success btn-sm" type="submit">Criar Dids</button></td>
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
                                    @foreach ($did as $key => $dados)
                                    
                                    <th scope="row">{{$dados->id}}</th>
                                    <td> {{$dados->numero}}></td>
                                    <td>{{$dados->descricao}}></td>
                                    <td>{{$dados->cliente}}</td>
                                    
                                    <form action="#" method="POST">
                                        <td>
                                            <input type="hidden" name="id" value=" {{$dados->id}}">
                                            <button class="btn btn-danger btn-sm" type="submit">Excluir</button>
                                        </td>
                                    </form>
                                    
                                    <form action="#" method="POST">
                                        <td>
                                            <input type="hidden" name="id" value=" {{$dados->id}}">
                                            <button class="btn btn-primary btn-sm" type="submit">Editar</button>
                                        </td>
                                    </form>
                                </tr>
                                @endforeach
                            </div>
                        </section>