<?php
    include '../../layouts/navbar.php';
    include '../../controller/middleware/isAdm.php';
?>

<style>
    .card-painel{
        background-color:#005790;
        color:white;
        height:175px;
        border-radius:8px;
        cursor: pointer;
        padding:0px;
        border: solid 5px white;
    }
    .card-painel:hover{
        background-color: #004a7c;
    }
</style>


<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3 mb-5">Painel de Administrador</h1>
        <div class="row">
            <div class="col-3 card-painel d-flex flex-row justify-content-between" onclick="location.href='../aluno/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/alunos-icon.png" width=75px>
                    <p class="m-0 display-6" style="font-size:1.8em">Alunos</p>
                </div>            
            </div>  
            <div class="col-3 card-painel d-flex flex-row justify-content-between" onclick="location.href='../professor/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/professores-icon.png" width=75px>
                    <p class="m-0 display-6" style="font-size:1.8em">Professores</p>
                </div>            
            </div> 
             <div class="col-3 card-painel d-flex flex-row justify-content-between" onclick="location.href='../curso/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/cursos-icon.png" width=125px>
                    <p class="m-0 display-6" style="font-size:1.8em">Cursos</p>
                </div>            
            </div>
            <div class="col-3 card-painel d-flex flex-row justify-content-between" onclick="location.href='../aula/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/aula-icon.png" width=125px>
                    <p class="m-0 display-6" style="font-size:1.8em">Aulas</p>
                </div>            
            </div>    
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4 mb-4"  onclick="location.href='../matricula/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/matriculas-icon.png" width=75px>
                    <p class="m-0 display-6" style="font-size:1.8em" >Matriculas</p>
                </div>            
            </div>              
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4 mb-4">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow" onclick="funcaoIndisponivel()">
                    <img src="../../images/pagamentos-icon.png" width=75px>
                    <p class="m-0 display-6" style="font-size:1.8em">Pagamentos</p>
                </div>            
            </div>             
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4 mb-4" onclick="location.href='../adm/index.php'">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/adm-icon.png" width=75px>
                    <p class="m-0 display-6" style="font-size:1.8em">Administradores</p>
                </div>            
            </div>    
        </div>    
    </div>
</div>
<script>
    function funcaoIndisponivel(){
        alert("Fun????o indispon??vel no momento");
    }    
    
    document.getElementById("nav-painel").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
    
</script>

<?php
    include '../../layouts/footer.php';
?>