<?php
    session_start();
    if($_SESSION['Acesso'] == 'aluno') {
        header('Location:../view/aluno/aulas.php');
    }elseif($_SESSION['Acesso'] == 'professor'){
        header('Location:../view/professor/aulas.php');
    }
?>