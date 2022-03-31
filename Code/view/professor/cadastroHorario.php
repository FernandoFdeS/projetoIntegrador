<?php
    include '../../layouts/navbar.php';
    include '../../controller/professor/cadastroHorario.php';
   
?>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Horario Disponivel</h1>
        <form class="mt-5" action="cadastroHorario.php" method="POST">
            <div class="form-group mt-3">
                <label for="dia">Dia da semana: </label>
                <select class="form-select" aria-label="Default select example" name="dia" id="dia" required>
                    <option value="" selected disabled>Selecione um dia</option>
                    <option value="0" >Segunda-feira</option>
                    <option value="1" >Terça-feira</option>
                    <option value="2" >Quarta-feira</option>
                    <option value="3" >Quinta-feira</option>
                    <option value="4" >Sexta-feira</option>
                    <option value="5" >Sabado</option>                    
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="periodo">Periodo: </label>
                <select class="form-select" aria-label="Default select example" name="periodo" id="periodo" required>
                    <option selected disabled>Selecione um periodo</option>
                    <option value="07:00-08:00">07:00 - 08:00</option>
                    <option value="08:00-09:00">08:00 - 09:00</option>
                    <option value="09:00-10:00">09:00 - 10:00</option>
                    <option value="10:00-11:00">10:00 - 11:00</option>
                    <option value="11:00-12:00">11:00 - 12:00</option>
                    <option value="13:00-14:00">13:00 - 14:00</option>
                    <option value="14:00-15:00">14:00 - 15:00</option>
                    <option value="15:00-16:00">15:00 - 16:00</option>
                    <option value="16:00-17:00">16:00 - 17:00</option>
                    <option value="17:00-18:00">17:00 - 18:00</option>
                    <option value="18:00-19:00">18:00 - 19:00</option>
                    <option value="19:00-20:00">19:00 - 20:00</option>
                    <option value="20:00-21:00">20:00 - 21:00</option>
                    <option value="21:00-22:00">21:00 - 22:00</option>                    
                </select>
            </div>
            <div class=" mt-5 mb-3">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a href="index.php" style="text-decoration:none;color:#005790">Voltar</a>
                </span>
            </div>
        </form>
    </div>
</div>
<script>  
    document.getElementById("nav-aulas").classList.add("active");
</script>