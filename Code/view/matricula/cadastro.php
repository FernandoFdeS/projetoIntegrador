<?php
    include '../../layouts/navbar.php';
    include '../../controller/matricula/cadastro.php';
   
?>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Matrícula</h1>
        <form class="mt-5" action="cadastro.php" method="POST">
            <div class="form-group mt-3">
                <label for="aluno">Aluno: </label>
                <select class="form-select" aria-label="Default select example" name="id_aluno" id="id_aluno" required>
                    <option value="" selected disabled>Selecione um aluno</option>
                    <?php
                    foreach($alunos as $aluno){
                        echo '<option name="id_aluno" value="'.$aluno['id'].'">'.$aluno['nome'].'</option>';                   
                    
                     }?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="curso">Curso: </label>
                <select class="form-select" aria-label="Default select example" name="id_curso" id="id_curso" required>
                    <option selected disabled>Selecione um curso</option>
                    <?php
                    foreach($cursos as $curso){
                        echo '<option name="id_curso" value="'.$curso['id'].'">'.$curso['nome'].'</option>';                    
                     }?>
                </select>
            </div>
            <div class="form-group mt-2">
                <label class="form-check-label" for="data">Data: </label>
                <input type="date" class="form-control" id="data" name="data">                
            </div>
            <div class=" mt-5 mb-3">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a href="index.php" style="text-decoration:none;color:#005790">Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>
<script>  

    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
    
</script>