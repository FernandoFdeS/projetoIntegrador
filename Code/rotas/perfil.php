<?php
    session_start();
    if($_SESSION['Acesso'] == 'aluno') {
        header('Location:../view/aluno/edit.php?id='.$_SESSION['id']);
    }elseif($_SESSION['Acesso'] == 'adm') {
        header('Location:../view/adm/edit.php?id='.$_SESSION['id']);  
    }elseif($_SESSION['Acesso'] == 'professor'){
        header('Location:../view/professor/edit.php?id='.$_SESSION['id']);
        echo'professor'; 
    }
?>