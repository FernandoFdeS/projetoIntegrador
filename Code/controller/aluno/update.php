<?php
    require '../../db/connection.php';
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        try {
            if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])&&isset($_POST['dataNasc'])){
                $cpf = $_POST['cpf'];
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                $email = $_POST['email'];
                $dataNasc = $_POST['dataNasc'];
                $username = $_POST['username'];
                $responsavel = NULL;
                if(isset($_POST['responsavel'])){
                    $responsavel = $_POST['responsavel'];
                }

                $datetime = new DateTime($dataNasc);

                $dataFormatada = $datetime->format('Y-m-d'); 

                $comando = $db->prepare('UPDATE aluno SET cpf = :cpf, nome = :nome, username = :username, senha = :senha, email = :email, data_nasc = :dataNasc, responsavel = :responsavel WHERE id = :id');
                $comando->bindParam(':cpf',$cpf);
                $comando->bindParam(':nome',$nome);
                $comando->bindParam(':username',$username);
                $comando->bindParam(':senha',$senha);
                $comando->bindParam(':email',$email);
                $comando->bindParam(':dataNasc',$dataFormatada);
                $comando->bindParam(':responsavel',$responsavel);
                $comando->bindParam(':id',$id);

                $comando->execute();                
            } else {

            }
            header('Location:../../view/aluno/index.php');

        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/aluno/index.php');
    }

?>