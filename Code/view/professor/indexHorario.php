<?php
    include '../../layouts/navbar.php';
    include '../../controller/professor/indexHorario.php';
    
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Horarios Disponiveis</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href="cadastroHorario.php">Adicionar Horario +</a>
        </span>
        <?php
            foreach($horarios as $horario){             
                echo '
                <div class="col-12 card d-flex flex-row justify-content-between mt-3">
                
                    <div class="d-flex flex-column">
                        <p class="m-0 display-6">';
                        if ($horario['dia']==0){
                            echo'Segunda-feira ';
                        }else if ($horario['dia']==1){
                            echo'Terça-feira ';
                        }else if ($horario['dia']==2){
                            echo'Quarta-feira ';
                        }else if ($horario['dia']==3){
                            echo'Quinta-feira ';
                        }else if ($horario['dia']==4){
                            echo'Sexta-feira ';
                        }else if ($horario['dia']==5){
                            echo 'Sábado';
                        } 
                         
                        echo '| '.$horario['periodo'].'</p>
                        <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">Disponivel</p>
                    </div>
                    <!-- Div abaixo ficara visivel apenas para administradores -->
                    <div class="d-flex align-items-center" id="'.$horario['id'].'">                        
                        <button class="btn-remover">
                            <img src="../../images/delete-icon.png" width=40px>
                        </button>
                    </div>
                </div>
                ';
            }?>
    
    </div>
</div>
<script>  

    document.getElementById("nav-aulas").classList.add("active");
    document.getElementById("nav-painel").classList.remove("active");
    document.getElementById("nav-musica").classList.remove("active");    
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
    
    
</script>