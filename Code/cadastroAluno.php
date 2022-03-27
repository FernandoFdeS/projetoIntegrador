<?php
    include 'layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1">Cadastro de Aluno</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group mt-3">
                <label for="cpf">CPF: </label>
                <input type="text" class="form-control" id="cpf" name="cpf" required>
            </div>

            <div class="form-group mt-3">
                <label class="form-check-label" for="dataNasc">Data de Nascimento: </label>
                <input type="date" class="form-control" id="dataNasc" name="dataNasc" required>                
            </div>

            <div class="form-group mt-3">
                <label for="responsavel">Nome do Responsável: </label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Opcional">
            </div>

            <div class="form-group mt-3">
                <label for="responsavel">E-mail: </label>
                <input type="email" class="form-control" id="responsavel" name="responsavel" placeholder="Opcional">
            </div>

            <div class=" mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>
               
            </div>
        </form>
    </div>
</div>