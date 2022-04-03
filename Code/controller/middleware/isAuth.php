<?php
    if(isset($_SESSION)){
        if($_SESSION['Autenticado']!=1){
            header('Location:../../view/index.php');
        }
    }
?>