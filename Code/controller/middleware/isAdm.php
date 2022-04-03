<?php
    if(isset($_SESSION)){
        if($_SESSION['Acesso']!='adm'){
            header('Location:../../view/index.php');
        }
    }
?>