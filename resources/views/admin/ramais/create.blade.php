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
                <form class="form-floating" action="{{route('ramais.store')}}" method="post">
                    @csrf
                    <input type="hidden" name="cid" value="cid">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Ramais</h3>                        
                        <div class="form-floating">                            
                            <input type="number" class="form-control @error('ramal') is-invalid @enderror" id="ramal" name="ramal" value="{{ old('ramal') }}">
                            <label for="floatingInputValue">Ramal</label>
                            @error('ramal')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                         <br>
                        <div class="form-floating">                            
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nomes" name="nomes" value=" {{old('nomes') }}">
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
                                <option value="sip">SIP</option>
                                <option value="web">WEB</option>                            
                            </select>
                            <label for="floatingSelect">Tipo</label>
                            @error('tipo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('bina') is-invalid @enderror" id="bina" name="bina" value=" {{old('bina') }}">
                            <label for="floatingInputValue">Bina</label>
                            @error('bina')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">                        
                            <select class="form-select form-floating @error('clientes_id') is-invalid @enderror" id="floatingSelect"
                                aria-label="Floating label select example" name="cliente_id">                        
                                <option></option>
                                @foreach ($dados as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nome}}</option>
                                @endforeach
                            </select>
                            <label for="floatingSelect">Clientes</label>
                            @error('cliente_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>        
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="{{route('ramais.tabela')}}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>