<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_curso=$_GET['id_curso'];
        
        $sql=$db->prepare('SELECT horario.* from HORARIO
        JOIN PROFESSOR_HORARIO on HORARIO.id = PROFESSOR_HORARIO.id_horario
        JOIN CURSO on CURSO.id_professor = PROFESSOR_HORARIO.id_professor WHERE CURSO.id = :id_curso AND PROFESSOR_HORARIO.disponivel = 1
        ORDER BY HORARIO.id');
        $sql->bindParam(':id_curso',$id_curso);

        $sql->execute();
        
        $horarios=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($horarios));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>