@include('admin.clientes.partials.header')

<section class="card">
    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">

                <form class="edicao" action=" {{route('clientes.update', $clientes->id)}} " method="post">
                    @csrf
                    @method('put')
                    <div class="col-md-6 ConteudoCard">
                        <h3>Editar Clientes</h3>
                        {{-- <input type="hidden" name="at" value="1"> 
                        <input type="hidden" name="id" value="{{$clientes->id}}"> --}}
                        <div class="form-floating">

                            <input type="text" class="form-control" id="nome" name="nome" value=" {{$clientes->nome}} ">
                            <label for="floatingInputValue">Nome</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="text" class="form-control" id="telefone" name="telefone" value=" {{$clientes->telefone}} ">
                            <label for="floatingInputValue">Telefone</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="email" class="form-control" id="email" name="email" value=" {{$clientes->email}}">
                            <label for="floatingInputValue">Email</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="endereco" name="endereco" value="{{$clientes->endereco}}">
                            <label for="floatingInputValue">Endereço</label>

                        </div>
                        <br>
                        <div class="form-floating">
                        
                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo"> 
                                <option value="1">Selecione</option>
                                <option value="Fisico"   >Fisico</option> 
                                <option value="Juridico" >Juridico</option>

                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="text" class="form-control" name="documento" value=" {{$clientes->documento}} ">
                            <label for="floatingInputValue">CPF/CNPJ</label>

                        </div>
                        <br>

                        <button type="submit" class="btn btn-primary">Atualizar </button>
                        <a class="btn btn-primary" href="{{route('clientes.visualizar')}}">Voltar</a>

                    </div>
                </form>

            </div>
    </section>