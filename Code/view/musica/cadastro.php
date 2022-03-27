<?php
    include '../../layouts/navbar.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Inserir Música</h1>
        <form class="mt-5" action="#" method="#">

            <div class="row mt-3">
                <div class="col-6">
                    <label for="musica">Título da Música: </label>
                    <input type="text" class="form-control" id="musica" name="musica" required>
                </div>

                <div class="col-6">
                    <label for="artista">Artista: </label>
                    <input type="text" class="form-control" id="artista" name="artista" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-6">
                    <label for="cifra">Cifra: </label>
                </div>

                <div class="col-6">
                    <label for="arquivo">Arquivo: </label>
                </div>
            </div>

            <div class="row mt-1">
                <div class="col-6">
                    <label class="btn-secundario" for="cifra">   <!-- placeholder até achar um jeito melhor -->
                        Enviar Cifra <input type="file" id="cifra" name="cifra" hidden>
                    </label>
                </div>

                <div class="col-6">
                    <label class="btn-secundario" for="arquivo">
                        Enviar Arquivo <input type="file" id="arquivo" name="arquivo" hidden>
                    </label>
                </div>
            </div>
          
            <div class="row mt-3">
                <div class="col-6">
                    <label for="link">Link: </label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="Opcional">
                </div>            

                <div class="col-6">
                    <label for="instrumento">Instrumento: </label>
                    <select class="form-select" aria-label="Default select example" name="instrumento" id="instrumento">
                        <option value="" selected disabled>Selecione um instrumento</option>
                        <option value="1">Violão 🎸</option>
                        <option value="2">Voz 🎙️</option>
                        <option value="3">Teclado 🎹</option>
                    </select>
                </div>
            </div>

            <div class="form-group mt-3">
                <label for="anotacoes">Anotações: </label>
                <textarea class="form-control" id="anotacoes" name="anotacoes" placeholder="Opcional" style="resize:none;"></textarea>
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


            <div class="mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>