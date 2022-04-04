<?php    
    if($_SESSION['Acesso'] == 'aluno') {
        $id = $_SESSION["id"];
    } else {
        $id = $_GET["id_aluno"];
    }
        
    $sql = $db->prepare('SELECT * FROM aluno WHERE id = :id');
    $sql->bindParam(':id',$id);
    $sql->execute();             
    $aluno=$sql->fetch();

    $sql1 = $db->prepare('SELECT * FROM musica WHERE id_aluno = :id');
    $sql1->bindParam(':id',$id);
    $sql1->execute();
    $musicas=$sql1->fetchAll(PDO::FETCH_ASSOC);
 
?>