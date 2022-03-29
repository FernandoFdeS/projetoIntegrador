<?php
    require '../../db/connection.php';

    try {
        $sql=$db->prepare('SELECT matricula.id,curso.nome as nomeCurso,aluno.nome as nomeAluno
        FROM MATRICULA join CURSO on CURSO.id = MATRICULA.id_curso
        JOIN ALUNO on ALUNO.id = MATRICULA.id_aluno');
        $sql->execute();
        $matriculas=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>