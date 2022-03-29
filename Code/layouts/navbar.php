<?php
    include 'header.php';
    echo('
    <nav class="navbar navbar-expand-lg navbar-light azul-cultural">
        <div class="container d-flex flex-md-row flex-sm-column">
            <a class="navbar-brand" href="#"><img src="../../images/logo-2-branco.png" width="100px"></a>
            <div class="justify-content-md-right justify-content-sm-center">
                <button class="navbar-toggler text-white" type="btn-secundario" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse align-right" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">');
                    if($_SESSION['Acesso']=='aluno'){  
                        echo('
                        <li class="nav-item ">
                            <a class="nav-link text-light" href="../aluno/musicas.php" id="nav-musica">MÚSICAS</a>
                        </li>');
                    }
                    if($_SESSION['Acesso']=='adm'){
                        echo('                        
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../adm/painel.php" id="nav-painel">PAINEL</a>
                        </li>                     
                        ');
                    }
                    if($_SESSION['Acesso']=='professor'){
                        echo('
                        <li class="nav-item">
                            <a class="nav-link text-light" href="../professor/aulas.php" id="nav-aulas">AULAS</a>                                       
                        </li>
                        ');
                    }
                    echo('
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#" id="nav-perfil">PERFIL</a>
                        </li>          
                        <li class="nav-item" style="margin-right: 30px;">
                            <a class="nav-link text-light" href="#" id="nav-recitais">RECITAIS</a>
                        </li>            
                        <form action="../../controller/login/logout.php" method="POST"> <!--Leva para o link que acaba com a SESSION-->
                            <input type="submit" class="btn btn-outline-light mt-auto " style="font-size: 20px; height: 100%; padding: 0px 20px;" value="SAIR">
                        </form>            
                    </ul>
                </div>
            </div>
        </div>
      </nav>
      ');
?>