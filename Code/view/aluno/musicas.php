<?php
    include '../../layouts/navbar.php';
    include '../../controller/aluno/musicas.php';
?>

<style>
    .status-badge{
        position: absolute;
        height: 100%;
        width: 20px;
        border-radius:10px;
    }
    .anotacoes{
        width:100%;
        resize:none;
        border-radius:5px;
    }
    .verde{
        background-color:#2cd459;
    }
    .amarelo{
        background-color:#f0fc00;
    }
    .azul{
        background-color:#446ffc;
    }
    .cinza{
        background-color: grey;
    }
</style>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 mb-3 display-3">
            <?php echo ($aluno['nome']) ?>
        </h1>
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a href='../musica/cadastro.php?idAluno=<?php echo ($aluno['id']) ?>'>Adicionar Música +</a>
        </span>
        <?php
        if(count($musicas)>0){echo'
        <div class="table-responsive px-0">
            <table class="table table-hover table-bordered mt-2 p-0">
                <thead>
                    <tr style="">
                        <th scope="col" colspan="3" >Música</th>
                        <th scope="col" colspan="1" class="text-center px-0">Cifra</th>
                        <th scope="col" colspan="1" class="text-center px-0">Link</th>
                        <th scope="col" colspan="1" class="text-center px-0">Arquivo</th>
                        <th scope="col" colspan="1" class="text-center px-0">Instrumento</th>
                        <th scope="col" colspan="2">Anotações</th>
                        <th scope="col" colspan="2">Status</th>
                        <th scope="col" colspan="2">Editar</th>
                    </tr>
                </thead>
            ';}
            ?>
            <?php 
                foreach ($musicas as $musica){
                    echo '
                        <tbody>
                            <tr>                        
                                <td colspan="3">
                                    <div style="position:relative">
                                        <div class="status-badge '; 
                                        if($musica['progressao']==1){
                                            echo'verde';
                                        }elseif($musica['progressao']==2){
                                            echo'azul';
                                        }elseif($musica['progressao']==3){
                                            echo'amarelo';
                                        }elseif($musica['progressao']==4){
                                            echo'cinza';
                                        }
                                        echo'" id="status-'.$musica['id'].'">&nbsp</div>
                                        <div class="d-flex flex-column" style="margin-left:30px">                                
                                            <p class="mb-1 font-weight-bold display-3" style="font-size:30px">'.$musica['nome'].'</p>
                                            <p class="mb-1 font-weight-light text-muted">'.$musica['artista'].'</p>
                                        </div>
                                    </div>
                                </td>
                                <td colspan="1" class="text-center px-0">';
                                if($musica['cifra']!=NULL){
                                    echo '<a href="'.$musica["cifra"].'" download="'.$musica['nome'].'">';
                                    echo '<img src="../../images/cifra-icon.png" width="50px">';
                                    echo '</a>';
                                } else {
                                    echo '<img src="../../images/none-icon.png" width="50px">';
                                }
                            echo '
                                </td>
                                <td colspan="1" class="text-center px-0">';
                                if($musica['link']!=NULL){
                                    echo '<a href="'.$musica['link'].'" target="_blank"><img src="../../images/link-icon.png" width="50px"></a>';
                                } else {
                                    echo '<img src="../../images/none-icon.png" width="50px">';
                                }
                            echo '
                                </td>
                                <td colspan="1" class="text-center px-0">';
                                if($musica['arquivo_musica']!=NULL){
                                    echo '<a href="'.$musica["arquivo_musica"].'" download="'.$musica['nome'].'">';
                                    echo '<img src="../../images/file-icon.png" width="50px">';
                                    echo '</a>';
                                } else {
                                    echo '<img src="../../images/none-icon.png" width="50px">';
                                }
                            echo '
                                </td>
                                <td colspan="1" class="text-center px-0">';
                                switch($musica['instrumento']){
                                    case 1:
                                        echo '<img src="../../images/violao-icon.png" width="50px">';
                                        break;
                                    case 2:
                                        echo '<img src="../../images/microfone-icon.png" width="50px">';
                                        break;
                                    case 3:
                                        echo '<img src="../../images/teclado-icon.png" width="70px">';
                                        break;    
                                    case 4:
                                        echo '<img src="../../images/guitarra-icon.png" width="50px">';
                                        break;      
                                    case 5:
                                        echo '<img src="../../images/bateria-icon.jpg" width="50px">';
                                        break;  
                                    case 6:
                                        echo '<img src="../../images/baixo-icon.png" width="50px">';
                                        break;      
                                    case 7:
                                        echo '<img src="../../images/violino-icon.png" width="50px">';
                                        break;   
                                    case 8:
                                        echo '<img src="../../images/outro-icon.png" width="50px">';
                                        break;    
                                }
                            echo '
                                </td>
                                <td colspan="2">
                                    <textarea class="anotacoes" id="note-'.$musica['id'].'" placeholder="..." onblur="quickNoteUpdate('.$musica['id'].')">'.$musica['anotacoes'].'</textarea>
                                </td>                         
                                <td colspan="2">
                                    <select class="form-select" id="select-'.$musica['id'].'" onchange="changeColor('.$musica['id'].')">
                                        <option value="1"';echo $musica['progressao']==1 ? 'selected':''; echo'>Aprendendo</option>
                                        <option value="2"';echo $musica['progressao']==2 ? 'selected':''; echo'>Completo</option>
                                        <option value="3"';echo $musica['progressao']==3 ? 'selected':''; echo'>Em espera</option>            
                                        <option value="4"';echo $musica['progressao']==4 ? 'selected':''; echo'>Planejando aprender</option>
                                    <select>
                                </td>
                                <td colspan="2" class="d-flex justify-content-center flex-column align-items-center" >
                                    <button onclick="location.href=\'../musica/edit.php?idAluno='.$aluno['id'].'&idMusica='.$musica['id'].'\';" class="btn-editar-sm mx-2 my-1">
                                        <img src="../../images/edit-icon.png" width=18px>
                                    </button>
                                    <button onclick="location.href=\'../../controller/musica/delete.php?idAluno='.$aluno['id'].'&idMusica='.$musica['id'].'\';" class="btn-remover-sm my-1">
                                        <img src="../../images/delete-icon.png" width=18px>
                                    </button>
                                </td>
                            <tr>                                             
                    </tbody>';
                }       
            ?>
            </table>
        </div>
    </div>
</div>
<script>
    function changeColor(id){
        var badge=document.getElementById('status-'+id);
        var option=document.getElementById('select-'+id).value;   
        badge.classList.remove("azul");
        badge.classList.remove("verde");
        badge.classList.remove("amarelo");
        badge.classList.remove("cinza");
        if(option==1){
            badge.classList.add("verde");
        }else if(option==2){
            badge.classList.add("azul");
        }else if(option==3){
            badge.classList.add("amarelo");
        } else if(option==4){
            badge.classList.add("cinza");
        }
        fetch('../../controller/aluno/updateStatusJson.php?id_musica='+id+"&id_status="+option);        
    }

    function quickNoteUpdate(id){
        var note=document.getElementById('note-'+id).value;        
        fetch('../../controller/aluno/updateNotesJson.php?id_musica='+id+"&note="+note);        
        
    }
    document.getElementById("nav-musica").classList.add("active");
    document.getElementById("nav-painel").classList.remove("active");    
    document.getElementById("nav-aulas").classList.remove("active");
    document.getElementById("nav-perfil").classList.remove("active");
    document.getElementById("nav-recitais").classList.remove("active");    

</script>
<?php include '../../layouts/footer.php'; ?>