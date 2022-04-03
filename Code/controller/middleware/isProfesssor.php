<?php
    if(isset($_SESSION)){
        if($_SESSION['Acesso']!='professor'){
            header('Location:../../view/index.php');
        }
    }
?>