<?php
    require '../../db/connection.php';

    if(isset($_GET['idMusica']) && isset($_GET['idAluno'])){
        $id = $_GET['idMusica'];
        try {
            $sql=$db->prepare('DELETE FROM musica WHERE id=:id');
            $sql->bindParam(':id',$id);
            $sql->execute();

            header('Location:../../view/aluno/musicas.php?id='.$_GET['idAluno']);
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/index.php');
    }
?>
