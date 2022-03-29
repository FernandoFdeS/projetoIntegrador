<?php
    require '../../db/connection.php';


    try {
        $sql=$db->prepare('SELECT nome,id from professor');
        $sql->execute();
        $professores=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($_POST['nome'])&&isset($_POST['id_professor'])){
            $nome = $_POST['nome'];
            $id_professor = $_POST['id_professor'];

            $sql1 = $db->prepare('INSERT INTO curso (nome,id_professor) values (:nome,:id_professor)');
            $sql1->bindParam(':nome',$nome);
            $sql1->bindParam(':id_professor',$id_professor);            
            $sql1->execute();
            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>