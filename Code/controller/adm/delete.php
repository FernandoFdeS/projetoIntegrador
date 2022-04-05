<?php
    require '../../db/connection.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            $sql=$db->prepare('DELETE FROM administrador WHERE id=:id');
            $sql->bindParam(':id',$id);
            $sql->execute();

            header('Location:../../view/adm/index.php');
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/adm/index.php');
    }
?>
