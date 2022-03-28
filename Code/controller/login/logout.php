<?php
    //require '../db/connection.php';
    session_start();    
    try{        
        session_destroy();
        header('Location:../../view/');
    } catch (PDOException $e) {
        echo 'Erro com o banco de dados: ' . $e->getMessage();
        exit();
    }
?>