<?php
    include '../../layouts/navbar.php';
    include '../../controller/aluno/edit.php';

?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Atualizar Aluno</h1>
        <form class="mt-5" action="../../controller/aluno/update.php" method="POST">
            <?php

            echo '
                <div class="form-group mt-3">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="'.$aluno['nome'].'" required placeholder="Nome do Aluno">
                </div>

                <div class="form-group mt-3">
                <label for="cpf" class="d-flex justify-content-between">
                    <span>CPF:</span>
                    <span class="text-muted display-3" style="font-size:15px;">Apenas números</span>
                    </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" minlength="11" maxlength="11" value="'.$aluno['cpf'].'" required placeholder="00000000000">
                </div>

                <div class="form-group mt-3">
                    <label for="dataNasc" class="d-flex justify-content-between">
                    <span>Data de Nascimento:</span>
                    <span class="text-muted display-3" style="font-size:15px;">DD/MM/AAAA</span>
                    </label>
                    <input type="date" class="form-control" id="dataNasc" name="dataNasc" value="'.$aluno['data_nasc'].'" required>                
                </div>

                <div class="form-group mt-3">
                    <label for="responsavel" class="d-flex justify-content-between">
                    <span>Responsável:</span>
                    <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                    </label>
                    <input type="text" class="form-control" id="responsavel" name="responsavel" value="'.$aluno['responsavel'].'" placeholder="Nome do Responsável">
                </div>

                <div class="form-group mt-3">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" value="'.$aluno['email'].'" placeholder="exemplo@email.com">
                </div>

                <div class="form-group mt-3">
                    <label for="username">Nome de usuário:</label>
                    <input type="text" class="form-control" id="username" name="username" value="'.$aluno['username'].'" placeholder="Nome de usuário">
                </div>

                <div class="form-group mt-3">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="Nova Senha" value="'.$aluno['senha'].'" required>
                </div>

                <!-- id -->
                <input type="hidden" class="form-control" id="id" name="id" value="'.$aluno['id'].'">

                <div class=" mt-5 mb-5">
                    <button type="submit" class="btn-principal">Salvar</button>
                    <span class="btn-secundario mx-1">
                        <a href="index.php" style="text-decoration:none;color:#005790">Voltar</a>
                    </span>
                
                </div>
                ';
            ?>
        </form>
    </div>
</div>

<script>    
    <?php
     if($_SESSION['Acesso']=='aluno'){
        echo'document.getElementById("nav-perfil").classList.add("active");';
    } else{
        echo'document.getElementById("nav-painel").classList.add("active");';
    }  
    ?>
</script>