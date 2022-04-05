<?php
    include '../../layouts/navbar.php';
    include '../../controller/adm/edit.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Administrador</h1>
        <form class="mt-5" action="../../controller/adm/update.php" method="POST">
            <?php

                echo '
                    <div class="form-group mt-3">
                        <label for="email">Email: </label>
                        <input type="email" class="form-control" id="email" name="email" value="'.$admin['email'].'" required placeholder="exemplo@email.com">
                    </div>
                    <div class="form-group mt-3">
                        <label for="senha">Senha: </label>
                        <input type="text" class="form-control" id="senha" name="senha" value="'.$admin['senha'].'" required placeholder="Nova Senha">
                    </div>

                    <input type="hidden" class="form-control" name="id" id="id" value="'.$admin['id'].'">

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