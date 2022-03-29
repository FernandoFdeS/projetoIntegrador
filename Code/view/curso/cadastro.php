<?php
    include '../../layouts/navbar.php';
    include '../../controller/curso/cadastro.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Curso</h1>
        <form class="mt-5" action="cadastro.php" method="POST">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do curso">
            </div>
            <div class="form-group mt-3">
                <label for="id_professor">Professor do curso: </label>
                <select class="form-select" aria-label="Default select example" name="id_professor" id="id_professor" required>
                    <option value="" selected disabled>Selecione um Professor</option>
                    <?php
                        foreach($professores as $professor){
                            echo '<option value="'.$professor['id'].'" name="id_professor">'.$professor['nome'].'</option>';
                        } 
                    ?>
                </select>
            </div>          
            <div class=" mt-5">
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