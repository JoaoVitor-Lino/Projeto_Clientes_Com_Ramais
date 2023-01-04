@include('admin.layouts.header')
<section class="card">

    <section class="content" class="background">
        <div class="content-title nav flex-column nav justify-content-left">
            <div class="container-fluid">
                <form class="form-floating" action="" method="POST">
                    <input type="hidden" name="n" value="n">
                    <div class="col-md-6 ConteudoCard">
                        <h3>Cadastrar Dids</h3>

                        <div class="form-floating">

                            <input type="text" class="form-control" name="numero">
                            <label for="floatingInputValue">DID</label>
                        </div>
                        <br>

                        <div class="form-floating">

                            <input type="TEXT" class="form-control" id="telefone" name="descricao">
                            <label for="floatingInputValue">Descrição</label>
                        </div>
                        <br>
                        <div class="form-floating">

                            <select class="form-select form-floating" id="floatingSelect"
                                aria-label="Floating label select example" name="clientes_id">

                                <option selected>Selecione</option>
                              @foreach ($clientes as $key => $dados)
                                <option value="{{$dados->nome}}"></option>
                               @endforeach 

                                <?php $cliente = new Clientes();
                                $info = $cliente->buscarDados();
                                @foreach ($info as $dados){ ?>
                            <option value="<?= $dados['id'] ?>"><?= $dados['nome']?></option>
                            <?php } ?>
                            </select>
                            <label for="floatingSelect">Clientes</label>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <a class="btn btn-primary" href="#">Voltar</a>
                    </div>
                </form>
    </section>