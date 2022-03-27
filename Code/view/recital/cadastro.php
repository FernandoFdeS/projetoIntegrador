<?php
    include '../../layouts/navbar.php';
?>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Recital</h1>
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
                <label for="link" class="d-flex justify-content-between">
                    <span>Link para fotos e vídeos:</span>
                    <span class="text-muted display-3" style="font-size:15px;">Opcional</span>
                </label>
                <input type="text" class="form-control" id="link" name="link">
            </div>            

            <div class=" mt-5 mb-2">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>               
            </div>
        </form>
    </div>
</div>