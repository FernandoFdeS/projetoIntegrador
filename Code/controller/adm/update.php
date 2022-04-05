<?php
    require '../../db/connection.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        try {
            if(isset($_POST['email'])&&isset($_POST['senha'])){
                $email = $_POST['email'];
                $senha = $_POST['senha'];
    
                $sql = $db->prepare('UPDATE administrador SET email = :email, senha = :senha WHERE id = :id');
                $sql->bindParam(':email',$email);
                $sql->bindParam(':senha',$senha);
                $sql->bindParam(':id',$id);               
                $sql->execute();
            }

            header('Location:../../view/adm/index.php');
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/adm/index.php');
    }
?>