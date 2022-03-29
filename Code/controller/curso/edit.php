<?php
    require '../../db/connection.php';

    try {
        if(isset($_GET['id'])){
            $sql=$db->prepare('SELECT nome,id from professor');
            $sql->execute();
            $professores=$sql->fetchAll(PDO::FETCH_ASSOC);
            
            
            $id = $_GET['id'];

            $sql1=$db->prepare('SELECT * FROM curso WHERE id=:id');
            $sql1->bindParam(':id',$id);
            $sql1->execute();
            $curso=$sql1->fetch();
        } else {
            header('Location:../../view/curso/index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>