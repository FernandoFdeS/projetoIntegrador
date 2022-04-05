<?php
    include '../../layouts/navbar.php';
    include '../../controller/adm/index.php';
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Administradores</h1>
        
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5" onclick="location.href='cadastro.php'">
            <a>Adicionar Administrador +</a>
        </span>
        <?php
            foreach($admins as $admin){
                echo'     
                    <div class="col-12 card d-flex flex-row justify-content-between">
                        <div class="d-flex flex-column">
                            <p class="m-0 display-6">'.$admin['email'].'</p>
                        </div>
                        
                        <div class="d-flex align-items-center">
                            <button onclick="location.href=\'edit.php?id='.$admin['id'].'\';" class="btn-editar mx-2">
                                <img src="../../images/edit-icon.png" width=40px>
                            </button>
                            <button onclick="location.href=\'../../controller/adm/delete.php?id='.$admin['id'].'\';" class="btn-remover">
                                <img src="../../images/delete-icon.png" width=40px>
                            </button>
                        </div>
                    </div>
                   ';
            }
        ?>
        
    
    </div>
</div>