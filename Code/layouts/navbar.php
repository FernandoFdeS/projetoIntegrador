<?php
    include 'header.php';

    echo('
    <nav class="navbar navbar-expand-lg navbar-light azul-cultural">
        <div class="container d-flex flex-md-row flex-sm-column">
            <a class="navbar-brand" href="#"><img src="images/logo-2-branco.png" width="100px"></a>
            <div class="justify-content-md-right justify-content-sm-center">
                <button class="navbar-toggler text-white" type="btn-secundario" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">
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
            </div>
        </div>
      </nav>
      ');
?>