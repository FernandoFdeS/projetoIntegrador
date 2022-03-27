<?php
    include '../../layouts/navbar.php';
?>
<style>
      input[type="file"]{
            margin: 0px;
            padding: 0px;
            display: none;
        }
        .btn-file{
            background-color: #59acff;
            cursor: pointer;
            color: white;
            border-radius: 5px;
            padding: 5px 10px;
            font-weight: lighter;
            width: auto;
            display: block;
            text-align: center;
            transition: 0.3s ease;
        }
        .btn-file:hover{
            background-color: #0275d8;
        }
</style>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Professor</h1>
        <form class="mt-5" action="#" method="#">
            <div class="form-group mt-3">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" id="nome" name="nome" required placeholder="Nome do Professor">
            </div>

            <div class="form-group mt-3">
                <label for="cpf" class="d-flex justify-content-between">
                   <span>CPF:</span>
                   <span class="text-muted display-3" style="font-size:15px;">Apenas números</span>
                </label>
                <input type="text" class="form-control" id="cpf" name="cpf" minlength="11" maxlength="11" required placeholder="00000000000">
            </div>

            <div class="form-group mt-3">
                <label for="telefone" class="d-flex justify-content-between">
                   <span>Telefone:</span>
                   <span class="text-muted display-3" style="font-size:15px;">(XX) X XXXX-XXXX</span>
                </label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) X XXXX-XXXX" required>                
            </div>

            <div class="form-group mt-3">
                <label for="contrato" class="d-flex justify-content-between">
                    <span>Contrato:</span>
                </label>                   
                    <label for="contrato" id="btnFile" class="btn-file">Escolha o arquivo</label>
                    <input type="file" class="" id="contrato" placeholder="Insira o contrato:" name="contrato" onChange="changeContratoLabel()">                   
            </div>


            <div class="form-group mt-3">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@email.com">
            </div>

            <div class="form-group mt-3">
                <label for="senha">Senha:</label>
                <input type="text" class="form-control" id="senha" name="senha">
            </div>

            <div class=" mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>

<script>
    function changeContratoLabel(){
        contrato = document.getElementById('contrato').files.length;
        console.log(contrato);
        if(contrato>0){
            document.getElementById('btnFile').innerHTML='Arquivo escolhido com sucesso';
            document.getElementById('btnFile').style.backgroundColor='#0275d8';
        }else{
            document.getElementById('btnFile').innerHTML='Escolha o contrato:';
            document.getElementById('btnFile').style.backgroundColor='#59acff';
        }
    }

    var chars = "0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ";
    var password = "";

    for (var i = 0; i <= 8; i++) {
        var randomNumber = Math.floor(Math.random() * chars.length);
        password += chars.substring(randomNumber, randomNumber +1);
    }

    document.getElementById("senha").value = password

</script>