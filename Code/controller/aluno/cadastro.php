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
                
                //checa se já existe
                $comando = $db->prepare('SELECT * FROM aluno WHERE username=:username');
                $comando->bindParam(':username',$username);
                $comando->execute();
                $row = $comando->fetch(PDO::FETCH_ASSOC);

                if($row){
                    $username = $username.".".$cpf; //se já exitir vira [nome].[ultimo nome].[cpf]
                }
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

            $_SESSION['flash-msg']="Aluno cadastrado com sucesso";
            $_SESSION['flash-bg']="success";

            header('Location:index.php');
        }

    } catch (PDOException $e) {
        if ($e->getCode()==23000){
            $_SESSION['flash-msg'] = "Falha no cadastro: Este e-mail já existe!";
            $_SESSION['flash-bg'] = "danger";
            header('Location:../../view/aluno/index.php');
        } else {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        }
        exit();
    } 

?>