<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_professor=$_GET['id_professor'];
        
        $sql=$db->prepare('SELECT curso.nome as nome,aula.id_horario as horario FROM PROFESSOR
        JOIN CURSO on CURSO.id_professor = PROFESSOR.id
        JOIN AULA on AULA.id_curso = CURSO.id 
        WHERE PROFESSOR.id = :id_professor');
        $sql->bindParam(':id_professor',$id_professor);

        $sql->execute();
        
        $aulas=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($aulas));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>