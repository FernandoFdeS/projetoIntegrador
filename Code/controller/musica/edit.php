<?php
    require '../../db/connection.php';

    if(isset($_GET['idMusica'])){
        $id = $_GET['idMusica'];
        try {
            $sql=$db->prepare('SELECT * FROM musica WHERE id=:id');
            $sql->bindParam(':id',$id);
            $sql->execute();
            $musica=$sql->fetch();
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/aluno/musicas.php?id='.$_GET['idAluno']);
    }
?>