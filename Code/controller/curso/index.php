<?php
    require '../../db/connection.php';

    try {
        $sql=$db->prepare('SELECT curso.nome,curso.id,professor.nome as nomeProfessor FROM CURSO join PROFESSOR on CURSO.id_professor = PROFESSOR.id');
        $sql->execute();
        $cursos=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>