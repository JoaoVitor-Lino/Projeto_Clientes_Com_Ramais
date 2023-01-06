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
                <form class="edicao" method="post" action="{{route('dids.update', $did->id)}}">
                    @csrf
                    @method('put')
                    <div class="col-md-6 ConteudoCard">
                        <h3>Editar Dids</h3>
                        <input type="hidden" name="at" value="1">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('numero') is-invalid @enderror"  name="numero" value="{{$did->numero}}">
                            <label for="floatingInputValue">Número</label>
                            @error('numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="text" class="form-control @error('descricao') is-invalid @enderror"  name="descricao" value="{{$did->descricao}}">
                            <label for="floatingInputValue">Descrição</label>
                            @error('descricao')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                        <select class="form-select form-floating @error('cliente_id') is-invalid @enderror" id="floatingSelect" aria-label="Floating label select example" name="cliente_id" value="{{old('cliente_id')}}">
                            <option></option>
                            @foreach ($dados as $cliente)
                                <option value="{{$cliente->id}}">{{ $cliente->nome }}</option>
                            @endforeach    
                        </select>
                        <label for="floatingSelect">Clientes</label>
                        @error('cliente_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        </div>
                        <br>  
                        <button type="submit" class="btn btn-primary">Atualizar </button>
                        <a class="btn btn-primary" href="{{route('dids.tabela')}}">Voltar</a>
                    </div>
                </form>
            </div>
    </section>