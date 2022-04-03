<?php
    if(!isset($_GET['idAluno'])){
        header('Location:../aluno/musicas.php');
    }
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
        <h1 class="mt-1 display-3">Inserir Música</h1>
        <form class="mt-5" action="../../controller/musica/cadastro.php" method="POST">

            <div class="row mt-3">
                <div class="col-6">
                    <label for="titulo">Título: </label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título da Música" required>
                </div>

                <div class="col-6">
                    <label for="artista">Artista: </label>
                    <input type="text" class="form-control" id="artista" name="artista" placeholder="Nome do Artista" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6">
                    <label for="cifra" class="d-flex justify-content-between">
                        <span>Cifra:</span>
                        <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                    </label>                      
                    <label for="cifra" id="btnCifra" class="btn-file">Escolha a cifra</label>
                    <input type="file" class="" id="cifra" placeholder="Insira a cifra:" name="cifra" onChange="changeCifraLabel()">                   
                </div>

                <div class="col-6">
                    <label for="arquivo" class="d-flex justify-content-between">
                        <span>Arquivo:</span>
                        <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                    </label>                     
                    <label for="arquivo" id="btnFile" class="btn-file">Escolha o arquivo</label>
                    <input type="file" class="" id="arquivo" placeholder="Insira o arquivo:" name="arquivo" onChange="changeArquivoLabel()">                   
                </div>
            </div>
          
            <div class="row mt-3">
                <div class="col-6">
                    <label for="link" class="d-flex justify-content-between">
                        <span>Link:</span>
                        <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                    </label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Link para a música">
                </div>            

                <div class="col-6">
                    <label for="instrumento">Instrumento: </label>
                    <select class="form-select" aria-label="Default select example" name="instrumento" id="instrumento" required>
                        <option value="" selected disabled>Selecione um instrumento</option>
                        <option value="1">Violão 🎸</option>
                        <option value="2">Voz 🎙️</option>
                        <option value="3">Teclado 🎹</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="anotacoes" class="d-flex justify-content-between">
                    <span>Anotações:</span>
                    <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                </label>
                <textarea class="form-control" id="anotacoes" name="anotacoes" placeholder="Anotações sobre a música" style="resize:none;"></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="status">Status: </label>
                    <select class="form-select" aria-label="Default select example" name="status" id="status">
                        <option value="1" selected>Aprendendo</option>
                        <option value="2">Completo</option>
                        <option value="3">Em espera</option>
                        <option value="4">Planejando aprender</option>
                    </select>
            </div>            

            <input type="hidden" id="idAluno" name="idAluno" value="<?php echo ($_GET['idAluno']) ?>">

            <div class="mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a href="#" style="text-decoration:none;color:#005790">Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>
<script >
    function changeCifraLabel(){
        cifra = document.getElementById('cifra').files.length;
        console.log(cifra);
        if(cifra>0){
            document.getElementById('btnCifra').innerHTML='Cifra escolhida com sucesso';
            document.getElementById('btnCifra').style.backgroundColor='#0275d8';
        }else{
            document.getElementById('btnCifra').innerHTML='Escolha a cifra:';
            document.getElementById('btnCifra').style.backgroundColor='#59acff';
        }
    }

    function changeArquivoLabel(){
        cifra = document.getElementById('arquivo').files.length;
        console.log(cifra);
        if(cifra>0){
            document.getElementById('btnFile').innerHTML='Arquivo escolhido com sucesso';
            document.getElementById('btnFile').style.backgroundColor='#0275d8';
        }else{
            document.getElementById('btnFile').innerHTML='Escolha a cifra:';
            document.getElementById('btnFile').style.backgroundColor='#59acff';
        }
    }
</script>