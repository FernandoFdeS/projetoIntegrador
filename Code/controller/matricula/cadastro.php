<?php
    require '../../db/connection.php';


    try {
        $sql=$db->prepare('SELECT nome,id from aluno');
        $sql->execute();
        $alunos=$sql->fetchAll(PDO::FETCH_ASSOC);

        $sql=$db->prepare('SELECT nome,id from curso');
        $sql->execute();
        $cursos=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($_POST['id_aluno'])&&isset($_POST['id_curso'])){
            $id_aluno = $_POST['id_aluno'];
            $id_curso = $_POST['id_curso'];

            $sql1 = $db->prepare('INSERT INTO matricula (id_aluno,id_curso) values (:id_aluno,:id_curso)');
            $sql1->bindParam(':id_aluno',$id_aluno);
            $sql1->bindParam(':id_curso',$id_curso);            
            $sql1->execute();

            $_SESSION['flash-msg']="Aluno matriculado com sucesso";
            $_SESSION['flash-bg']="success";
            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>