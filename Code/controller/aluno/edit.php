<?php
    require '../../db/connection.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            $sql=$db->prepare('SELECT * FROM aluno WHERE id=:id');
            $sql->bindParam(':id',$id);
            $sql->execute();
            $aluno=$sql->fetch();
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/aluno/index.php');
    }
?>
