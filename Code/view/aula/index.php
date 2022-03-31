<?php
    include '../../layouts/navbar.php';
    include '../../controller/aula/index.php';
    
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Aulas</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href="cadastro.php">Cadastrar Aulas +</a>
        </span>
            <?php  
                foreach($aulas as $aula){
                    echo '                
                    <div class="col-12 card d-flex flex-row mb-3 justify-content-between">
                        <div class="d-flex flex-column">
                            <p class="m-0 display-6">                         
                                '.$aula['nome'].' - '.$aula['professor'].' - '.$aula['periodo'].'
                            </p>
                            <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">';
                               foreach($alunos as $aluno){
                                    if($aluno['id_aula']==$aula['id']){
                                        echo $aluno['nome'].' | ';
                                    }
                               }                                                                 
                                echo'
                            </p>
                        </div>
                        <!-- Div abaixo ficara visivel apenas para administradores -->
                        <div class="d-flex align-items-center">
                            <button onclick="location.href=\'edit.php?id='.$aula['id'].'\';" class="btn-editar mx-2">
                                <img src="../../images/edit-icon.png" width=40px>
                            </button>
                            <button class="btn-remover">
                                <img src="../../images/delete-icon.png" width=40px>
                            </button>
                        </div>
                    </div>
                    ';     
                }  
            ?>
    </div>
</div>
<script>
       
    document.getElementById("nav-painel").classList.add("active");

</script>