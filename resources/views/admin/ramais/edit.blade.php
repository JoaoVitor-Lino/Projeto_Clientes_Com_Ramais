@include('admin.layouts.header')

@if (session('messages'))
<div class="alert alert-success" >
    {{ session('messages') }}
</div>
@endif
<section class="card">
    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">    
                <form class="edicao" method="post" action="{{route('ramais.update', $ramal->id)}}">
                    @csrf
                    @method('put')
                    <div class="col-md-6 ConteudoCard">
                        <h3>Editar Ramais</h3>
                        <input type="hidden" name="at" value="1">
                        <div class="form-floating">    
                            <input type="number" class="form-control @error('ramal') is-invalid @enderror" name="ramal" value="{{$ramal->ramal}}">
                            <label for="floatingInputValue">Ramal</label>
                            @error('ramal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                            <br>
                        <div class="form-floating">   
                            <input type="name" class="form-control @error('nome') is-invalid @enderror" name="nomes" value="{{$ramal->nomes}}">
                            <label for="floatingInputValue">Nome</label>
                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">                                                       
                            <select class="form-select form-floating @error('tipo') is-invalid @enderror" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo" >
                                <option selected>Selecione</option>
                                <option value="sip"<?php if ($ramal->tipo == "sip") { echo  "selected";}?>>SIP</option>
                                <option value="web" {{$ramal->tipo == "web" ? "selected='selected'" : ""}}>WEB</option>                            
                            </select>
                            <label for="floatingSelect">Tipo</label>
                            @error('tipo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>                   
                        <br>
                        <div class="form-floating" >                        
                            <input type="text" class="form-control @error('bina') is-invalid @enderror" id="endereco" name="bina" value="{{$ramal->bina}}">
                            <label for="floatingInputValue">Bina</label>
                            @error('bina')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">                        
                            <select class="form-select form-floating  @error('cliente_id') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example" name="cliente_id">                            
                                <option></option>                            
                                @foreach ($dados as $cliente)
                                <option value="{{$cliente->id}}" @if ($cliente->id === $ramal->cliente_id) {{"selected= $cliente->id"}} @endif>{{$cliente->nome}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Clientes</label>
                                @error('cliente_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>                      
                        <button type="submit" class="btn btn-primary">Atualizar </button>
                        <a class="btn btn-primary" href="paginaRamais.php">Voltar</a>                    
                    </div>
                </form> 
            </div>               
        </div>
    </section>
</section>
    