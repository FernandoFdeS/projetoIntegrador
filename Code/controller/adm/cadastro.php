<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['email'])&&isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];


            $sql = $db->prepare('INSERT INTO administrador(email,senha) values (:email,:senha)');
            $sql->bindParam(':senha',$senha);
            $sql->bindParam(':email',$email);
            $sql->execute();
            
        }
        header('Location:../../view/adm/index.php');
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>