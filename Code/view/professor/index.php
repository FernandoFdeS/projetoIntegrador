<?php
    include '../../layouts/navbar.php';
    include '../../controller/professor/index.php';
    include '../../controller/middleware/isAdm.php';
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Professores</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5" onclick="location.href='cadastro.php'">
            <a href="cadastro.php">Adicionar Professor +</a>
        </span>
        <?php
        foreach($professores as $professor){
            echo'
        <div class="col-12 card d-flex flex-row mb-3 justify-content-between">
            <div class="d-flex flex-column" id="'.$professor['id'].'">
                <p class="m-0 display-6">'.$professor['nome'].'
                ';
                if($professor['contrato']!=NULL){
                    echo '<a href="'.$professor["contrato"].'" download="contrato-'.$professor['nome'].'">';
                    echo '<img src="../../images/contrato-icon.png" width="30px">';
                    echo '</a>';
                }
                echo'
                </p>
                
                <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">CPF: '.$professor['cpf'].'</p>
            </div>
            <!-- Div abaixo ficara visivel apenas para administradores -->
            <div class="d-flex align-items-center">
                <button onclick="location.href=\'edit.php?id='.$professor['id'].'\';" class="btn-editar mx-2" >
                    <img src="../../images/edit-icon.png" width=40px>
                </button>
                <button onclick="location.href=\'../../controller/professor/delete.php?id='.$professor['id'].'\';" class="btn-remover">
                    <img src="../../images/delete-icon.png" width=40px>
                </button>
            </div>
        </div>
        ';}
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