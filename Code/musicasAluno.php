<?php
    include 'layouts/navbar.php';
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
</style>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 mb-3">Nome do Aluno</h1>
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a>Adicionar Música +</a>
        </span>
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
                    </tr>
                </thead>
                <tbody>
                    <tr>                        
                        <td colspan="3">
                            <div style="position:relative">
                                <div class="status-badge verde" id="status-1">&nbsp</div>
                                <div class="d-flex flex-column" style="margin-left:30px">                                
                                    <p class="mb-1 font-weight-bold display-3" style="font-size:30px">Nome da Música</p>
                                    <p class="mb-1 font-weight-light text-muted">Nome do artista</p>
                                </div>
                            </div>
                        </td>
                        <td colspan="1" class="text-center px-0">
                            <img src="images/cifra-icon.png" width="50px">
                        </td>
                        <td colspan="1" class="text-center px-0">
                            <img src="images/none-icon.png" width="50px">
                        </td>
                        <td colspan="1" class="text-center px-0">
                            <img src="images/none-icon.png" width="50px">
                        </td>
                        <td colspan="1" class="text-center px-0">
                            <img src="images/none-icon.png" width="50px">
                        </td>
                        <td colspan="2">
                            <textarea class="anotacoes" id="note-1" placeholder="Anotações" onblur="quickNoteUpdate(1)"></textarea>
                        </td>                         
                        <td colspan="2">
                            <select class="form-select" id="select-1" onchange="changeColor(1)">
                                <option value="1">Aprendendo</option>
                                <option value="2">Completo</option>
                                <option value="3">Em espera</option>
                            <select>
                        </td>                        
                    <tr>                                             
               </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function changeColor(id){ //funcao responsavel por mudar a cor da badge do status
        var badge=document.getElementById('status-'+id);
        var option=document.getElementById('select-'+id).value;
        console.log(option);
        badge.classList.remove("azul");
        badge.classList.remove("verde");
        badge.classList.remove("amarelo");
        if(option==1){
            badge.classList.add("verde");
        }else if(option==2){
            badge.classList.add("azul");
        }else if(option==3){
            badge.classList.add("amarelo");
        }        
    } 
    //OBS: futuramente tambem sera responsavel for atualizar no banco quando o select for alterado (usando ajax e etc)
    //O mesmo se aplica para quando mudarmos as anotacoes.

    function quickNoteUpdate(id){
        var note=document.getElementById('note-'+id).value;
        //faz uma requisicao ajax atualizando no banco o campo anotacoes da musica com o id passado
        //remover esse alert bobo quando a funcao estiver funcional
        alert("Anotações salvas!");
        alert("kkkkmentira");
    }
</script>