<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_musica=$_GET['id_musica'];
        $note=$_GET['note'];      
        
        $sql=$db->prepare('UPDATE MUSICA SET anotacoes = :note WHERE id = :id_musica');
        $sql->bindParam(':id_musica',$id_musica);        
        $sql->bindParam(':note',$note);        
        $sql->execute();        
            
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>