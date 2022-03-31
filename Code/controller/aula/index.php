<?php
    require '../../db/connection.php';

    try {
        $sql=$db->prepare('SELECT nome,aluno.id as id,aluno_aula.id_aula as id_aula FROM aluno
        JOIN ALUNO_AULA on ALUNO.id = ALUNO_AULA.id_aluno');
        $sql->execute();
        $alunos=$sql->fetchAll(PDO::FETCH_ASSOC);

        $sql=$db->prepare('SELECT aula.id as id,curso.nome as nome, horario.periodo as periodo, professor.nome as professor FROM AULA
        JOIN CURSO on aula.id_curso = curso.id
        JOIN HORARIO on aula.id_horario = horario.id
        JOIN PROFESSOR on curso.id_professor = professor.id');
        $sql->execute();
        $aulas=$sql->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>
