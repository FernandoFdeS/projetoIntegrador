<?php
    include '../../layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Matrícula</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="aluno">Aluno: </label>
                <select class="form-select" aria-label="Default select example" name="aluno" id="aluno" required>
                    <option value="" selected disabled>Selecione um aluno</option>
                    <option value="1">Aluno 1</option>
                    <option value="2">Aluno 2</option>
                    <option value="3">Aluno 3</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="curso">Curso: </label>
                <select class="form-select" aria-label="Default select example" name="curso" id="curso" required>
                    <option selected disabled>Selecione um curso</option>
                    <option value="1">Curso 1</option>
                    <option value="2">Curso 2</option>
                    <option value="3">Curso 3</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label class="form-check-label" for="data">Data: </label>
                <input type="date" class="form-control" id="data" name="data">                
            </div>
            <div class=" mt-5 mb-3">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>