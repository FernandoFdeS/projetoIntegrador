<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_professor=$_GET['id_professor'];       
        $sql=$db->prepare('SELECT horario.* 
        FROM HORARIO join PROFESSOR_HORARIO on HORARIO.id = PROFESSOR_HORARIO.id_horario
        WHERE PROFESSOR_HORARIO.id_professor = :id_professor where PROFESSOR_HORARIO.disponivel="1" ORDER BY HORARIO.id;      
        ');
        $sql->bindParam(':id_professor',$id_professor);
        $sql->execute();
        $horarios=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($horarios));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>