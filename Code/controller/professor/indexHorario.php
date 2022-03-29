<?php
    require '../../db/connection.php';

    try {
        $id_professor=$_SESSION['id'];
        echo $id_professor;
        $sql=$db->prepare('SELECT horario.* 
        FROM HORARIO join PROFESSOR_HORARIO on HORARIO.id = PROFESSOR_HORARIO.id_horario
        WHERE PROFESSOR_HORARIO.id_professor = :id_professor ORDER BY HORARIO.id;      
        ');
        $sql->bindParam(':id_professor',$id_professor);
        $sql->execute();
        $horarios=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>