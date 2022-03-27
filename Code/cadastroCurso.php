<?php
    include 'layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Curso</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do curso">
            </div>
            <div class="form-group mt-3">
                <label for="id_professor">Professor do curso: </label>
                <select class="form-select" aria-label="Default select example" name="id_professor" id="id_professor" required>
                    <option value="" selected disabled>Selecione um Professor</option>
                    <option value="id">Professor 1</option>
                    <option value="id">Professor 2</option>
                    <option value="id">Professor 3</option>
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