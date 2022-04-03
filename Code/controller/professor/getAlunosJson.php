<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_professor=$_GET['id_professor'];
        
        $sql=$db->prepare('SELECT ALUNO.nome as nome,AULA.id_horario as horario FROM
        AULA JOIN CURSO on AULA.id_curso = CURSO.id
        JOIN PROFESSOR on CURSO.id_professor = PROFESSOR.id
        JOIN ALUNO_AULA on ALUNO_AULA.id_aula = AULA.id
        JOIN ALUNO on ALUNO_AULA.id_aluno = ALUNO.id
        WHERE PROFESSOR.id = :id_professor');
        $sql->bindParam(':id_professor',$id_professor);

        $sql->execute();
        
        $alunos=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($alunos));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>