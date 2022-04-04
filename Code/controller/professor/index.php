<?php
    require '../../db/connection.php';

    try {
        $sql=$db->prepare('SELECT nome,cpf,id,contrato FROM professor');
        $sql->execute();
        $professores=$sql->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>