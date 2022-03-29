<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])){
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
          
            $sql = $db->prepare('INSERT INTO professor(cpf,nome,senha,email) values (:cpf,:nome,:senha,:email)');
            $sql->bindParam(':cpf',$cpf);
            $sql->bindParam(':nome',$nome);
            $sql->bindParam(':senha',$senha);
            $sql->bindParam(':email',$email);
            $sql->execute();
            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>