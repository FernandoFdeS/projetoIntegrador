<?php
    require '../../db/connection.php';

    try {
        $sql=$db->prepare('SELECT nome,id,cpf FROM aluno');
        $sql->execute();
        $alunos=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
