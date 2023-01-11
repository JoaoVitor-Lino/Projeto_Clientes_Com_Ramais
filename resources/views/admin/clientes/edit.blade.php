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
                <form class="edicao" action=" {{route('clientes.update',$clientes->id)}} " method="post">
                    @csrf
                    @method('put')
                    <div class="col-md-6 ConteudoCard">
                        <h3>Editar Clientes</h3>            
                        <input type="hidden" name="id" value="{{$clientes->id}}">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value=" {{$clientes->nome}} ">
                            <label for="floatingInputValue">Nome</label>
                            @error('nome')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('telefone') is-invalid @enderror" id="telefone" name="telefone" value=" {{$clientes->telefone}} ">
                            <label for="floatingInputValue">Telefone</label>
                            @error('telefone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value=" {{$clientes->email}}">
                            <label for="floatingInputValue">Email</label>
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{$clientes->endereco}}">
                            <label for="floatingInputValue">Endereço</label>
                            @error('endereco')
                             <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">           
                            <select class="form-select form-floating @error('tipo') is-invalid @enderror" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo"> 
                                <option value="Fisico" <?php if ($clientes->tipo == "Fisico") { echo  "selected";}?>  >Fisico</option> 
                                <option value="Juridico" <?php if ($clientes->tipo == "Juridico") { echo  "selected";}?>>Juridico</option>        
                            </select>
                            <label for="floatingSelect">Tipo</label>
                            @error('tipo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control @error('documento') is-invalid @enderror" name="documento" value=" {{$clientes->documento}} ">
                            <label for="floatingInputValue">CPF/CNPJ</label>
                            @error('documento')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Atualizar </button>
                        <a class="btn btn-primary" href="{{route('clientes.visualizar')}}">Voltar</a>
                    </div>
                </form>
            </div>
        </div>    
    </section>    
</section>