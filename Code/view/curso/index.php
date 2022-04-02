<?php
    include '../../layouts/navbar.php';
    include '../../controller/curso/index.php';
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cursos</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href="cadastro.php">Adicionar Curso +</a>
        </span>
        <?php
        foreach($cursos as $curso){
            echo'
            <div class="col-12 card d-flex flex-row mb-3 justify-content-between">
                <div class="d-flex flex-column" id="'.$curso['id'].'">
                    <p class="m-0 display-6">'.$curso['nome'].'</p>
                    <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">'.$curso['nomeProfessor'].'</p>
                </div>
                <!-- Div abaixo ficara visivel apenas para administradores -->
                <div class="d-flex align-items-center">
                    <button onclick="location.href=\'edit.php?id='.$curso['id'].'\';" class="btn-editar mx-2">
                        <img src="../../images/edit-icon.png" width=40px>
                    </button>
                    <button onclick="location.href=\'../../controller/curso/delete.php?id='.$curso['id'].'\';" class="btn-remover">
                        <img src="../../images/delete-icon.png" width=40px>
                    </button>
                </div>

            </div>';
            }
        ?>
    
    </div>
</div>
<script>  

    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
    
</script>