<?php
    require '../../db/connection.php';

    if(isset($_POST['id'])){
        $id = $_POST['id'];
        try {
            if(isset($_POST['nome'])&&isset($_POST['id_professor'])){
                $nome = $_POST['nome'];
                $id_professor = $_POST['id_professor'];
    
                $sql = $db->prepare('UPDATE curso SET nome = :nome, id_professor = :id_professor WHERE id = :id');
                $sql->bindParam(':nome',$nome);
                $sql->bindParam(':id_professor',$id_professor);
                $sql->bindParam(':id',$id);               
                $sql->execute();
            }

            header('Location:../../view/curso/index.php');
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/curso/index.php');
    }
?>