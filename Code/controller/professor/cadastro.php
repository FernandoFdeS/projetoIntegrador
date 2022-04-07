<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['nome'])&&isset($_POST['cpf'])&&isset($_POST['senha'])&&isset($_POST['email'])){
            $cpf = $_POST['cpf'];
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];
            $email = $_POST['email'];
            
            $contrato = NULL;

            if($_FILES['contrato']){                
                $fileName= $_FILES['contrato']['name'];
                $fileExtension=explode('.',$fileName);
                $realFileExtension=strtolower(end($fileExtension));               
                $newFileName=uniqid('',true).".".$realFileExtension;
                if($_FILES['contrato']['error']===0){
                    $fileDestination = '../../storage/contratos/'.$newFileName;                    
                    move_uploaded_file($_FILES['contrato']['tmp_name'],$fileDestination);
                    $contrato=$fileDestination;
                }               
            }
           

            $sql = $db->prepare('INSERT INTO professor(cpf,nome,senha,email,contrato) values (:cpf,:nome,:senha,:email,:contrato)');
            $sql->bindParam(':cpf',$cpf);
            $sql->bindParam(':nome',$nome);
            $sql->bindParam(':senha',$senha);
            $sql->bindParam(':email',$email);
            $sql->bindParam(':contrato',$contrato);
            $sql->execute();

            $_SESSION['flash-msg']="Professor cadastrado com sucesso";
            $_SESSION['flash-bg']="success";

            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>