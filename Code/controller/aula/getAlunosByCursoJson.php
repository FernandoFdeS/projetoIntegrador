<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_curso=$_GET['id_curso'];
        
        $sql=$db->prepare('SELECT aluno.id,aluno.nome FROM CURSO 
        join MATRICULA on matricula.id_curso = curso.id
        join ALUNO on matricula.id_aluno = ALUNO.id
        WHERE Curso.id= :id_curso');
        $sql->bindParam(':id_curso',$id_curso);        
        $sql->execute();        
        $alunos=$sql->fetchAll(PDO::FETCH_ASSOC);
        echo(json_encode($alunos));
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>