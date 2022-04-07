<?php
    if(isset($_SESSION)){
        if($_SESSION['Acesso']=='aluno'){
            header('Location:../../view/index.php');
        }
    }
?>