<?php
    require '../../db/connection.php';


    try {
        if(isset($_POST['periodo'])&&isset($_POST['dia'])){
            echo "olhaeuaqui";
            $periodo = $_POST['periodo'];
            $dia = $_POST['dia'];
            $sql = $db->prepare('SELECT id from horario where periodo=:periodo and dia=:dia');
            $sql->bindParam(':periodo',$periodo);
            $sql->bindParam(':dia',$dia);
            $sql->execute();
            $resultado=$sql->fetch();
            $id_horario=$resultado['id'];
            $id_professor=$_SESSION['id'];
            //echo($id_horario);
            //echo($id_professor);
            $sql1 = $db->prepare('INSERT INTO professor_horario(id_horario,id_professor,disponivel) values (:id_horario,:id_professor,1)');
            $sql1->bindParam(':id_horario',$id_horario);
            $sql1->bindParam(':id_professor',$id_professor);
            $sql1->execute();
            header('Location:indexHorario.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>