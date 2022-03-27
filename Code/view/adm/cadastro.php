<?php
    include '../../layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Administrador</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="email">Email: </label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email do ADM">
            </div>
            <div class="form-group mt-3">
                <label for="senha">Senha: </label>
                <input type="text" class="form-control" id="senha" name="senha" required placeholder="Senha do Aluno">
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