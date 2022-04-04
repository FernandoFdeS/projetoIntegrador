<?php
    require '../../db/connection.php';

   
    try {
        if(isset($_POST['titulo'])&&isset($_POST['artista'])&&isset($_POST['instrumento'])&&isset($_POST['status'])&&isset($_POST['idAluno'])){
            $titulo = $_POST['titulo'];
            $artista = $_POST['artista'];
            $instrumento = $_POST['instrumento'];
            $status = $_POST['status'];
            $idAluno = $_POST['idAluno'];

            $cifraPath = NULL;
            $arqPath = NULL;     
            $link = NULL;
            $anotacoes = NULL;

            if($_FILES['cifra']){                
                $fileName= $_FILES['cifra']['name'];
                $fileExtension=explode('.',$fileName);
                $realFileExtension=strtolower(end($fileExtension));               
                $newFileName=uniqid('',true).".".$realFileExtension;
                if($_FILES['cifra']['error']===0){
                    $fileDestination = '../../storage/cifras/'.$newFileName;                    
                    move_uploaded_file($_FILES['cifra']['tmp_name'],$fileDestination);
                    $cifraPath=$fileDestination;
                }               
            }

            if($_FILES['arquivo']){                
                $fileName= $_FILES['arquivo']['name'];
                $fileExtension=explode('.',$fileName);
                $realFileExtension=strtolower(end($fileExtension));               
                $newFileName=uniqid('',true).".".$realFileExtension;
                if($_FILES['arquivo']['error']===0){
                    $fileDestination = '../../storage/musicas/'.$newFileName;                    
                    move_uploaded_file($_FILES['arquivo']['tmp_name'],$fileDestination);
                    $arqPath=$fileDestination;
                }               
            }
            
          
            
            if(isset($_POST['link'])){
                $link = $_POST['link'];
            }

            if(isset($_POST['anotacoes'])){
                $anotacoes = $_POST['anotacoes'];
            }


            $sql = $db->prepare('INSERT INTO musica(nome,artista,anotacoes,progressao,cifra,link,arquivo_musica,instrumento,id_aluno) values (:titulo,:artista,:anotacoes,:status,:cifra,:link,:arquivo_musica,:instrumento,:id_aluno)');
            $sql->bindParam(':id_aluno',$idAluno);
            $sql->bindParam(':titulo',$titulo);
            $sql->bindParam(':artista',$artista);
            $sql->bindParam(':anotacoes',$anotacoes);
            $sql->bindParam(':status',$status);
            $sql->bindParam(':cifra',$cifraPath);
            $sql->bindParam(':link',$link);
            $sql->bindParam(':arquivo_musica',$arqPath);
            $sql->bindParam(':instrumento',$instrumento);
            
            $sql->execute();
        }

        header('Location:../../view/aluno/musicas.php');

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>