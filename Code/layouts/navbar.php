<?php
    include 'header.php';

    echo('
    <nav class="navbar navbar-expand-lg navbar-light azul-cultural">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/logo-2-branco.png" width="100px"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link text-light active" href="#">MÚSICAS</a>
                </li>
                <!-- Aparace para ADM
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">PAINEL</a>
                </li>
                </li>
                -->
                <!-- Aparace para PROFESSORES
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">PAINEL</a>
                </li>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">PAINEL</a>
                </li>
                </li>
                -->
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">PERFIL</a>
                </li>          
                <li class="nav-item" style="margin-right: 30px;">
                    <a class="nav-link text-light" href="#">RECITAIS</a>
                </li>            
                <form action="#"> <!--Leva para o link que acaba com a SESSION-->
                    <input type="submit" class="btn btn-outline-light mt-auto " style="font-size: 20px; height: 100%; padding: 0px 20px;" value="SAIR">
                </form>            
            </ul>
        </div>
      </nav>
      ');
?>