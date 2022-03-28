<?php    
    $id=$_SESSION["id"];
    $sql = $db->prepare('SELECT * FROM aluno WHERE id = :id');
    $sql->bindParam(':id',$id);
    $sql->execute();             
    $aluno=$sql->fetch();
    //temos que fazer ainda o select das musicas e etc. 
?>