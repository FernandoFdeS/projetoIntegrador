<?php
    include '../../layouts/navbar.php';
    include '../../controller/aluno/cadastro.php';
    include '../../controller/middleware/isAdm.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Aluno</h1>
        <form class="mt-5" action="cadastro.php" method="POST">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do Aluno">
            </div>

            <div class="form-group mt-3">
            <label for="cpf" class="d-flex justify-content-between">
                   <span>CPF:</span>
                   <span class="text-muted display-3" style="font-size:15px;">Apenas números</span>
                </label>
                <input type="text" class="form-control" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="00000000000">
            </div>

            <div class="form-group mt-3">
                <label for="dataNasc" class="d-flex justify-content-between">
                   <span>Data de Nascimento:</span>
                   <span class="text-muted display-3" style="font-size:15px;">DD/MM/AAAA</span>
                </label>
                <input type="date" class="form-control" id="dataNasc" name="dataNasc" required>                
            </div>

            <div class="form-group mt-3">
                <label for="responsavel" class="d-flex justify-content-between">
                   <span>Responsável:</span>
                   <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                </label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" placeholder="Nome do Responsável">
            </div>

            <div class="form-group mt-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com">
            </div>

            <div class="form-group mt-3">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha" required>
            </div>

            <div class=" mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a href="index.php" style="text-decoration:none;color:#005790">Voltar</a>
                </span>
               
            </div>
        </form>
    </div>
</div>

<script>
    var chars = "0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ";
    var password = "";

    for (var i = 0; i <= 8; i++) {
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber +1);
    }

    document.getElementById("senha").value = password

       
    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
</script>