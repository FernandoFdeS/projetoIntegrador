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
                $contrato = NULL;
                if(isset($_POST['contrato'])){
                    $contrato = $_POST['contrato'];
                }

                if($_FILES['contrato']){                
                    $fileName= $_FILES['contrato']['name'];
                    $fileExtension=explode('.',$fileName);
                    $realFileExtension=strtolower(end($fileExtension));               
                    $newFileName=uniqid('',true).".".$realFileExtension;
                    if($_FILES['contrato']['error']===0){
                        unlink($contrato);
                        $fileDestination = '../../storage/contratos/'.$newFileName;                    
                        move_uploaded_file($_FILES['contrato']['tmp_name'],$fileDestination);
                        $contrato=$fileDestination;
                    }               
                }
            
                $sql = $db->prepare('UPDATE professor SET cpf = :cpf, nome = :nome, senha = :senha, email = :email, contrato = :contrato WHERE id = :id');
                $sql->bindParam(':cpf',$cpf);
                $sql->bindParam(':nome',$nome);
                $sql->bindParam(':senha',$senha);
                $sql->bindParam(':email',$email);
                $sql->bindParam(':contrato',$contrato);
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