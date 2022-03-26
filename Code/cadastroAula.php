<?php
    include 'layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1">Cadastro de Aula</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="professor">Professor: </label>
                <select class="form-select" aria-label="Default select example" name="professor" id="professor">
                    <option selected disabled>Selecione um professor</option>
                    <option value="1">Professor 1</option>
                    <option value="2">Professor 2</option>
                    <option value="3">Professor 3</option>
                </select>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <label for="horario">Horário: </label>
                    <select class="form-select" aria-label="Default select example" name="horario" id="horario">
                        <option selected disabled>Selecione um horário</option>
                        <option value="1">horário 1</option>
                        <option value="2">horário 2</option>
                        <option value="3">horário 3</option>
                    </select>
                </div>

                <div class="col-6">
                    <label for="curso">Curso: </label>
                    <select class="form-select" aria-label="Default select example" name="curso" id="curso">
                        <option selected disabled>Selecione um curso</option>
                        <option value="1">Curso 1</option>
                        <option value="2">Curso 2</option>
                        <option value="3">Curso 3</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="aluno">Aluno: </label>
                <select class="form-select" aria-label="Default select example" name="aluno" id="aluno">
                    <option selected disabled>Selecione um aluno</option>
                    <option value="1">Aluno 1</option>
                    <option value="2">Aluno 2</option>
                    <option value="3">Aluno 3</option>
                </select>
            </div>


            <div class=" mt-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>
               
            </div>
        </form>
    </div>
</div>