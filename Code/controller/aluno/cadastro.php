<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])){
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];

            $comando = $db->prepare('INSERT INTO aluno(cpf,nome,username,senha,email) values (:cpf,:nome,"username_legal",:senha,:email)');
            $comando->bindParam(':cpf',$cpf);
            $comando->bindParam(':nome',$nome);
            $comando->bindParam(':senha',$senha);
            $comando->bindParam(':email',$email);

            $comando->execute();
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>