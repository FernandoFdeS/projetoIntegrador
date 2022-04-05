<?php
    require '../../db/connection.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        try {
            $sql0=$db->prepare('SELECT id_aula FROM aluno_aula WHERE id_aluno=:id');
            $sql0->bindParam(':id',$id);
            $sql0->execute();
            $aulas=$sql0->fetchAll(PDO::FETCH_ASSOC);

            foreach($aulas as $aula){
                $sql=$db->prepare('DELETE FROM aula WHERE id=:id');
                $sql->bindParam(':id',$aula['id_aula']);
                $sql->execute();
            }

            $sql1=$db->prepare('DELETE FROM aluno_aula WHERE id_aluno=:id');
            $sql1->bindParam(':id',$id);
            $sql1->execute();

            $sql2=$db->prepare('DELETE FROM aluno WHERE id=:id');
            $sql2->bindParam(':id',$id);
            $sql2->execute();

            header('Location:../../view/aluno/index.php');
        } catch (PDOException $e) {
            echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
            exit();
        }
    } else {
        header('Location:../../view/aluno/index.php');
    }
?>
