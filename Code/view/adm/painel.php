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
            <div class="col-3 card-painel d-flex flex-row justify-content-between">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/alunos-icon.png" width=75px>
                    <a class="m-0 display-6" href="../aluno/index.php">Alunos</a>
                </div>            
            </div>  
            <div class="col-3 card-painel d-flex flex-row justify-content-between">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/professores-icon.png" width=75px>
                    <a class="m-0 display-6" href="../professor/index.php">Professores</a>
                </div>            
            </div> 
             <div class="col-3 card-painel d-flex flex-row justify-content-between">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/cursos-icon.png" width=125px>
                    <a class="m-0 display-6" href="../curso/index.php">Cursos</a>
                </div>            
            </div>
            <div class="col-3 card-painel d-flex flex-row justify-content-between">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/aula-icon.png" width=125px>
                    <a class="m-0 display-6" href="../aula/index.php">Aulas</a>
                </div>            
            </div>                
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow" onclick="funcaoIndisponivel()">
                    <img src="../../images/pagamentos-icon.png" width=75px>
                    <p class="m-0 display-6">Pagamentos</p>
                </div>            
            </div>  
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/matriculas-icon.png" width=75px>
                    <a class="m-0 display-6" href="../matricula/index.php">Matriculas</a>
                </div>            
            </div>  
            <div class="col-3 card-painel d-flex flex-row justify-content-between mt-4">
                <div class="d-flex flex-column align-items-center  justify-content-center  col-12 shadow">
                    <img src="../../images/adm-icon.png" width=75px>
                    <p class="m-0 display-6">Administradores</p>
                </div>            
            </div>    
        </div>    
    </div>
</div>
<script>
    function funcaoIndisponivel(){
        alert("Função indisponível no momento");
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