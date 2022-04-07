<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_aluno=$_GET['id_aluno'];
        
        $sql=$db->prepare('SELECT curso.nome as nome, aula.id_horario as horario from aluno
        join aluno_aula on aluno_aula.id_aluno = aluno.id
        join aula on aula.id=aluno_aula.id_aula
        join curso on aula.id_curso = curso.id where aluno.id=:id_aluno');
        $sql->bindParam(':id_aluno',$id_aluno);
        $sql->execute();
        
        $aulas=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($aulas));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>