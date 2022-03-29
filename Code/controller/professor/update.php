<?php
    require '../../db/connection.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        try {
            if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])){
                $cpf = $_POST['cpf'];
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
            
                $sql = $db->prepare('UPDATE professor SET cpf = :cpf, nome = :nome, senha = :senha, email = :email WHERE id = :id');
                $sql->bindParam(':cpf',$cpf);
                $sql->bindParam(':nome',$nome);
                $sql->bindParam(':senha',$senha);
                $sql->bindParam(':email',$email);
                $sql->bindParam(':id',$id);
                $sql->execute();  
            }

            header('Location:../../view/professor/index.php');
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/professor/index.php');
    }
?>