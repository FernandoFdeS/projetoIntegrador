<?php
    include '../../layouts/navbar.php';
    include '../../controller/aluno/index.php';
    
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Alunos</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href="cadastro.php">Adicionar Aluno +</a>
        </span>
        <?php
            foreach($alunos as $aluno){
                echo'           
                    <div class="col-12 card d-flex flex-row mt-3 justify-content-between">
                        <div class="d-flex flex-column">
                            <p class="m-0 display-6">'.$aluno['nome'].'                           
                            
                            </p>
                            <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">CPF:
                                '.$aluno['cpf'].'                            
                            </p>
                        </div>
                        <!-- Div abaixo ficara visivel apenas para administradores -->
                        <div class="d-flex align-items-center">
                            <button class="btn-editar mx-2">
                                <img src="../../images/edit-icon.png" width=40px>
                            </button>
                            <button class="btn-remover">
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