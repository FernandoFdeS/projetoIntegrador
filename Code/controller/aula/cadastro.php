<?php
    require '../../db/connection.php';
    

    //pega todos os alunos que estao matriculados no curso e cadastra na aula
    try {
        $sql=$db->prepare('SELECT nome,id from CURSO');
        $sql->execute();
        $cursos=$sql->fetchAll(PDO::FETCH_ASSOC);
        
        if(isset($_POST['curso'])&&isset($_POST['horario'])){
            $id_curso = $_POST['curso'];
            $id_horario = $_POST['horario'];
            $alunos= $_POST['alunos'];            

            //cadastra a aula;
            $sql = $db->prepare('INSERT INTO Aula(id_curso,id_horario) values (:id_curso,:id_horario)');
            $sql->bindParam(':id_curso',$id_curso);
            $sql->bindParam(':id_horario',$id_horario);
            $sql->execute();

            //pegamos o id da ultima aula cadastrada com essas caracteristicas

            $sql = $db->prepare("SELECT id from AULA where id_curso=:id_curso and id_horario=:id_horario ORDER BY id DESC LIMIT 1");
            $sql->bindParam(':id_curso',$id_curso);
            $sql->bindParam(':id_horario',$id_horario);
            $sql->execute();
            $id_aula=$sql->fetch();

            foreach($alunos as $aluno){                
                $sql = $db->prepare('INSERT INTO ALUNO_AULA(id_aluno,id_aula) values (:id_aluno,:id_aula)');
                $sql->bindParam(':id_aluno',$aluno);
                $sql->bindParam(':id_aula',$id_aula[0]);
                $sql->execute();
            }

            // $sql1 = $db->prepare('INSERT INTO curso (nome,id_professor) values (:nome,:id_professor)');
            //$sql1->bindParam(':nome',$nome);
            //$sql1->bindParam(':id_professor',$id_professor);            
            //$sql1->execute();
            header('Location:index.php');
        }

    } catch (PDOException $e) {
        echo 'Erro ao executar comando no banco de dados: ' . $e->getMessage();
        exit();
    }

?>