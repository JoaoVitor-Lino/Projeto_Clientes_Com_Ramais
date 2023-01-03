@include('admin.clientes.partials.header')
<section class="card">

    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">
                <form class="form-floating" action="{{route('clientes.store')}}" method="POST">
                    @csrf
                    <input type="hidden" name="c" value="c">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Clientes</h3>

                        <div class="form-floating">

                            <input type="text" class="form-control" id="nome" name="nome">
                            <label for="floatingInputValue">Nome</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="number" class="form-control" id="telefone" name="telefone">
                            <label for="floatingInputValue">Telefone</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="email" class="form-control" id="email" name="email">
                            <label for="floatingInputValue">Email</label>
                        </div>
                        <br>
                        <div class="form-floating">
                            <input type="text" class="form-control" id="endereco" name="endereco">
                            <label for="floatingInputValue">Endereço</label>

                        </div>
                        <br>
                        <div class="form-floating">

                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="tipo">
                                <option selected value="0">Selecione</option>
                                <option value="Fisico">Fisico</option>
                                <option value="Juridico">Juridico</option>

                            </select>
                            <label for="floatingSelect">Tipo</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <input type="text" class="form-control" name="documento">
                            <label for="floatingInputValue">CPF/CNPJ</label>

                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="paginaClientes.php">Voltar</a>
                    </div>
                    
                </form>
            </div>    
        </div>        
    </section>

</html>