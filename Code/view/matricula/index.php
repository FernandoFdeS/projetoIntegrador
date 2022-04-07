<?php
    include '../../layouts/navbar.php';
    include '../../controller/matricula/index.php';
    
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Matrículas</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5" onclick="location.href='cadastro.php'">
            <a href="cadastro.php">Adicionar Matrícula +</a>
        </span>
        <?php
            foreach($matriculas as $matricula){             
                echo '
                <div class="col-12 card d-flex flex-row justify-content-between mt-3">
                
                    <div class="d-flex flex-column">
                        <p class="m-0 display-6">'.$matricula['id'].'</p>
                        <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">'.$matricula['nomeAluno'].' | '.$matricula['nomeCurso'].'</p>
                    </div>
                    <!-- Div abaixo ficara visivel apenas para administradores -->
                    <div class="d-flex align-items-center" id="'.$matricula['id'].'">
                        <button onclick="location.href=\'../../controller/matricula/delete.php?id='.$matricula['id'].'\';" class="btn-remover">
                            <img src="../../images/delete-icon.png" width=40px>
                        </button>
                    </div>
                </div>
                ';
            }?>
    
    </div>
</div>
<script>  

    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
    
</script>
<?php include '../../layouts/footer.php'; ?>