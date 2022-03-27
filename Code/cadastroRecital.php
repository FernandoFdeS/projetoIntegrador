<?php
    include 'layouts/navbar.php';
?>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1">Cadastro de Recital</h1>
        <form class="mt-5" action="#" method="#">

            <div class="form-group mt-2">
                <label class="form-check-label" for="data">Data do recital: </label>
                <input type="date" class="form-control" id="data" name="data" required>                
            </div>

            <div class="form-group mt-3">
                <label for="local">Local: </label>
                <input type="text" class="form-control" id="local" name="local" required>
            </div>

            <div class="form-group mt-3">
                <label for="link">Link para vídeos e fotos: </label>
                <input type="text" class="form-control" id="link" name="link" placeholder="Opcional">
            </div>            

            <div class=" mt-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>               
            </div>
        </form>
    </div>
</div>