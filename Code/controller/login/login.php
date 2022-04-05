<?php
    require '../db/connection.php';
    session_start();
    if(isset($_SESSION['Acesso'])){
        if($_SESSION['Acesso']=='adm'){
            header('Location:adm/painel.php'); 
        }else if ($_SESSION['Acesso']=='aluno'){
            header('Location:aluno/musicas.php'); 
        }else if($_SESSION['Acesso']=='professor'){
            header('Location:professor/aulas.php');
        }        
    }
    try{        
        if(isset($_POST['email']) && isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];             
            
            //Procurando na tabela de ADMs
            $sql=$db->prepare("SELECT * FROM administrador WHERE email=:email AND senha=:senha"); 
            $sql->bindParam(':email',$email);
            $sql->bindParam(':senha',$senha);
            $sql->execute();             
            $administrador=$sql->fetch();                
            if($administrador){
                session_start();
                $_SESSION['Autenticado']=1;
                $_SESSION['Acesso']='adm';
                $_SESSION['id']=$administrador['id'];
                header('Location:adm/painel.php');                    
            }

            //Procurando na tabela de Professores;
            $sql=$db->prepare("SELECT * FROM professor WHERE email=:email AND senha=:senha"); 
            $sql->bindParam(':email',$email);
            $sql->bindParam(':senha',$senha);
            $sql->execute();             
            $professor=$sql->fetch();                
            if($professor){
                session_start();
                $_SESSION['Autenticado']=1;
                $_SESSION['Acesso']='professor';
                $_SESSION['id']=$professor['id'];
                header('Location:professor/aulas.php');                    
            }
            
            //Procurando na tabela de Alunos;
                        
            $sql=$db->prepare("SELECT * FROM aluno WHERE email=:email AND senha=:senha OR username=:email AND senha=:senha"); 
            $sql->bindParam(':email',$email);
            $sql->bindParam(':senha',$senha);           
            $sql->execute();             
            $aluno=$sql->fetch();                
            if($aluno){
                session_start();
                $_SESSION['Autenticado']=1;
                $_SESSION['Acesso']='aluno';
                $_SESSION['id']=$aluno['id'];
                header('Location:aluno/musicas.php');                    
            }
            
                
        }
    } catch (PDOException $e) {
        echo 'Erro com o banco de dados: ' . $e->getMessage();
        exit();
    }
?>