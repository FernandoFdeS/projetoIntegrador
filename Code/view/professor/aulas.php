<?php
    include '../../layouts/navbar.php';
?>
<style>
    .indisponivel{
        background-color:#e5e4e2;
    }
    p{
        margin:0px;
    }
</style>
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">
            Agenda
        </h1>
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href="indexHorario.php">Gerenciar Horários</a>
        </span>
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5" onclick="funcaoIndisponivel()">
            <a>Marcar Recuperação</a>
        </span>
        <div class="table-responsive px-0">
            <table class="table table-bordered table-sm table-sm mt-2 p-0" style="border:1px solid black">
                <thead>
                    <tr style="">
                        <th scope="col" class="text-center" colspan="1">HORÁRIOS</th>
                        <th scope="col" class="text-center" colspan="1">Segunda-feira</th>
                        <th scope="col" class="text-center" colspan="1">Terça-feira</th>
                        <th scope="col" class="text-center" colspan="1">Quarta-feira</th>
                        <th scope="col" class="text-center" colspan="1">Quinta-feira</th>
                        <th scope="col" class="text-center" colspan="1">Sexta-feira</th>
                        <th scope="col" class="text-center" colspan="1">Sábado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>07:00-08:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-1">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-15">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-29">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-43">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-57">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-71">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>08:00-09:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-2">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-16">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-30">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-44">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-58">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-72">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>09:00-10:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-3">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-17">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-31">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-45">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-59">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-73">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>10:00-11:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-4">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-18">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-32">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-46">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-60">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-74">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>11:00-12:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-5">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-19">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-33">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-47">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-61">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-75">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>13:00-14:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-6">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-20">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-34">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-48">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-62">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-76">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>14:00-15:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-7">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-21">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-35">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-49">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-63">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-77">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>15:00-16:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-8">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-22">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-36">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-50">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-64">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-78">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>16:00-17:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-9">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-23">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-37">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-51">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-65">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-79">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>17:00-18:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-10">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-24">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-38">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-52">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-66">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-80">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>18:00-19:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-11">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-25">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-39">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-53">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-67">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-81">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>19:00-20:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-12">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-26">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-40">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-54">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-68">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-82">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>20:00-21:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-13">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-27">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-41">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-54">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-69">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-83">
                            <p></p>  
                        </td>               
                    <tr>
                    <tr>                       
                        <td colspan="1" class="text-center px-0">
                            <p>20:00-21:00</p>
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-14">
                            <p></p>  
                        </td>
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-28">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-42">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-55">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-70">
                            <p></p>  
                        </td> 
                        <td colspan="1" class="text-center px-0" style="background-color:#e5e4e2" id="horario-84">
                            <p></p>  
                        </td>               
                    <tr>                                                                     
               </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function funcaoIndisponivel(){
        alert("Função indisponível no momento");
    } 

    document.getElementById("nav-aulas").classList.add("active");
    document.getElementById("nav-musica").classList.remove("active");
    document.getElementById("nav-painel").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");
</script>