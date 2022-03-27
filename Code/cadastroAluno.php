<?php
    include 'layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Aluno</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do Aluno">
            </div>

            <div class="form-group mt-3">
            <label for="cpf" class="d-flex justify-content-between">
                   <span>CPF:</span>
                   <span class="text-muted display-3" style="font-size:15px;">XXX.XXX.XXX-XX</span>
                </label>
                <input type="text" class="form-control" id="cpf" name="cpf" required placeholder="XXX.XXX.XXX-XX">
            </div>

            <div class="form-group mt-3">
                <label for="dataNasc" class="d-flex justify-content-between">
                   <span>Data de Nascimento:</span>
                   <span class="text-muted display-3" style="font-size:15px;">DD/MM/AAAA</span>
                </label>
                <input type="date" class="form-control" id="dataNasc" name="dataNasc" required>                
            </div>

            <div class="form-group mt-3">
                <label for="responsavel" class="d-flex justify-content-between">
                   <span>Responsável:</span>
                   <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                </label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="...">
            </div>

            <div class="form-group mt-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="...">
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