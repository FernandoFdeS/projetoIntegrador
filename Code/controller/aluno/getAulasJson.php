<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_aluno=$_GET['id_aluno'];
        
        $sql=$db->prepare('SELECT curso.nome as nome,aula.id_horario as horario FROM ALUNO
        JOIN ALUNO_AULA on ALUNO_AULA.id_aula = ALUNO.id
        JOIN AULA on AULA.id = ALUNO_AULA.id_aula 
        JOIN CURSO on  AULA.id_curso = CURSO.id         
        WHERE ALUNO.id = :id_aluno');
        $sql->bindParam(':id_aluno',$id_aluno);

        $sql->execute();
        
        $aulas=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($aulas));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>