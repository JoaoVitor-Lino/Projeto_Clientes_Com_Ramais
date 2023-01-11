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
                <form class="form-floating" action="{{route('dids.store')}}" method="post">
                    @csrf            
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Dids</h3>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{ old('numero') }}">
                            <label for="floatingInputValue">DID</label>
                            @error('numero')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="TEXT" class="form-control @error('descricao') is-invalid @enderror" id="descricao" name="descricao" value="{{ old('descricao') }}">
                            <label for="floatingInputValue">Descrição</label>
                            @error('descricao')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <select class="form-select form-floating @error('cliente_id') is-invalid @enderror" id="floatingSelect"
                                    aria-label="Floating label select example " name="cliente_id" value="{{ old('cliente_id') }}">
                                <option ></option>
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
                        <a class="btn btn-primary" href="{{route('dids.tabela')}}">Voltar</a>
                    </div>
                </form>
            </div>    
        </div>    
    </section>
</section>        