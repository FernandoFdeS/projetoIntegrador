<?php
    require '../../db/connection.php';

    if(isset($_POST['idMusica'])){
        $idMusica = $_POST['idMusica'];
        try {
            if(isset($_POST['titulo'])&&isset($_POST['artista'])&&isset($_POST['instrumento'])&&isset($_POST['status'])&&isset($_POST['idAluno'])){
                $titulo = $_POST['titulo'];
                $artista = $_POST['artista'];
                $instrumento = $_POST['instrumento'];
                $status = $_POST['status'];
                $idAluno = $_POST['idAluno'];

                $cifraPath = NULL;  // não utilizados
                $arqPath = NULL;    // ainda
                
                $link = NULL;
                $anotacoes = NULL;
                
                if(isset($_POST['link'])){
                    $link = $_POST['link'];
                }

                if(isset($_POST['anotacoes'])){
                    $anotacoes = $_POST['anotacoes'];
                }


                $sql = $db->prepare('UPDATE musica SET nome = :titulo, artista = :artista, 
                anotacoes = :anotacoes, progressao = :status, cifra = :cifra, link = :link, arquivo_musica = :arquivo_musica, instrumento = :instrumento WHERE id = :id');
                $sql->bindParam(':titulo',$titulo);
                $sql->bindParam(':artista',$artista);
                $sql->bindParam(':anotacoes',$anotacoes);
                $sql->bindParam(':status',$status);
                $sql->bindParam(':cifra',$cifraPath);
                $sql->bindParam(':link',$link);
                $sql->bindParam(':arquivo_musica',$arqPath);
                $sql->bindParam(':instrumento',$instrumento);
                $sql->bindParam(':id',$idMusica);

                
                $sql->execute();
            }

            header('Location:../../view/aluno/musicas.php?id='.$_GET['idAluno']);

        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/aluno/musicas.php?id='.$_GET['idAluno']);
    }

?>