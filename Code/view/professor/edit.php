<?php
    include '../../layouts/navbar.php';
    include '../../controller/professor/edit.php';
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
        <h1 class="mt-1 display-3">Atualizar Professor</h1>
        <form class="mt-5" action="../../controller/professor/update.php" method="POST">
            <?php
                echo '
                <div class="form-group mt-3">
                    <label for="nome">Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" value="'.$professor['nome'].'" required placeholder="Nome do Professor">
                </div>

                <div class="form-group mt-3">
                    <label for="cpf" class="d-flex justify-content-between">
                    <span>CPF:</span>
                    <span class="text-muted display-3" style="font-size:15px;">Apenas números</span>
                    </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" minlength="11" maxlength="11" value="'.$professor['cpf'].'" required placeholder="00000000000">
                </div>

                <!--
                <div class="form-group mt-3">
                    <label for="telefone" class="d-flex justify-content-between">
                    <span>Telefone:</span>
                    <span class="text-muted display-3" style="font-size:15px;">(XX) X XXXX-XXXX</span>
                    </label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) X XXXX-XXXX" required>                
                </div>
                -->

                <div class="form-group mt-3">
                    <label for="contrato" class="d-flex justify-content-between">
                        <span>Contrato:</span>
                    </label>                   
                        <label for="contrato" id="btnFile" class="btn-file">Escolha o arquivo</label>
                        <input type="file" class="" id="contrato" placeholder="Insira o contrato:" name="contrato" onChange="changeContratoLabel()">                   
                </div>


                <div class="form-group mt-3">
                    <label for="email">E-mail:</label>
                    <input type="email" class="form-control" id="email" name="email" value="'.$professor['email'].'" placeholder="exemplo@email.com">
                </div>

                <div class="form-group mt-3">
                    <label for="senha">Senha:</label>
                    <input type="text" class="form-control" id="senha" name="senha" placeholder="Nova Senha" required value="'.$professor['senha'].'">
                </div>
                
                <!-- id -->
                <input type="hidden" class="form-control" id="id" name="id" value="'.$professor['id'].'">

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

    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");


</script>