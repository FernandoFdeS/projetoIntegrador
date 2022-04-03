<?php
    require '../../db/connection.php';

    try {        
        header('Content-type: application/json'); 
        $id_musica=$_GET['id_musica'];
        $id_status=$_GET['id_status'];      
        
        $sql=$db->prepare('UPDATE MUSICA SET progressao = :id_status WHERE id = :id_musica');
        $sql->bindParam(':id_musica',$id_musica);        
        $sql->bindParam(':id_status',$id_status);        
        $sql->execute();        
            
    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }
?>