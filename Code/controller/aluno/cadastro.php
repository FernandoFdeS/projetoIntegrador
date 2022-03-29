<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])&&isset($_POST['dataNasc'])){
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            $dataNasc = $_POST['dataNasc'];
            $responsavel = NULL;
            if(isset($_POST['responsavel'])){
                $responsavel = $_POST['responsavel'];
            }
            
            //gera username 
            $lower = strtolower($nome);
            $separa = explode(" ", $lower);            
            if(count($separa)==1){
                $username = $separa[0].".".$cpf; //se tiver só primeiro nome vira "[nome].[cpf]"
            } else {
                $username = $separa[0].".".$separa[count($separa)-1]; //se tiver sobrenome vira "[nome].[ultimo nome]"
            
                //TODO: checar se já existe
            }

            $datetime = new DateTime($dataNasc);

            $dataFormatada = $datetime->format('Y-m-d'); 

            $comando = $db->prepare('INSERT INTO aluno(cpf,nome,username,senha,email,data_nasc,responsavel) values (:cpf,:nome,:username,:senha,:email,:dataNasc,:responsavel)');
            $comando->bindParam(':cpf',$cpf);
            $comando->bindParam(':nome',$nome);
            $comando->bindParam(':username',$username);
            $comando->bindParam(':senha',$senha);
            $comando->bindParam(':email',$email);
            $comando->bindParam(':dataNasc',$dataFormatada);
            $comando->bindParam(':responsavel',$responsavel);
            $comando->execute();
            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>