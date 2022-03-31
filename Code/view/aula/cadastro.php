<?php
    include '../../layouts/navbar.php';
    include '../../controller/aula/cadastro.php';
?>

<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cadastro de Aula</h1>
        <form class="mt-5" action="cadastro.php" method="POST">
            <div class="form-group mt-3">               
                <div class="col-12">
                    <label for="curso">Curso: </label>
                    <select class="form-select" aria-label="Default select example" name="curso" id="curso" onchange="getHorarios(),getAlunos()" required>
                        <option value="0" selected disabled>Selecione um curso</option>
                        <?php foreach($cursos as $curso)
                            echo '<option value="'.$curso['id'].'">'.$curso['nome'].'</option>'; 
                        ?>                        
                    </select>
                </div>

                <div class="row mt-3">
                    <div class="col-12">
                        <label for="horario">Horários Disponiveis Para o Professor do Curso: </label>
                        <select class="form-select" aria-label="Default select example" name="horario" id="horario" required>
                            <option value="" selected disabled>Selecione um horário</option>                            
                        </select>
                    </div>
                </div>

                
            </div>

            
            <div class="form-group mt-3">
                <label for="alunos[]">Aluno: </label>
                <select class="form-select" aria-label="Default select example" name="alunos[]" id="alunos[]" multiple="multiple" required>
                    <option value="" selected disabled>Selecione um aluno</option>
                </select>
            </div>
            
        
            <div class=" mt-5 mb-5">
                <button type="submit" class="btn-principal">Cadastrar</button>
                <span class="btn-secundario mx-1">
                    <a >Voltar</a>
                </span>               
            </div>
        </form>
    </div>
</div>
<script>
      const populaHorarios = (result)=>{
        const select = document.getElementById("horario");
        while (select.hasChildNodes()) {
            select.removeChild(select.firstChild);
        }
        if(result['length']==0){
            var option = document.createElement("option");
            option.value = "-1";
            option.text = "Professor sem horarios disponiveis";
            option.disabled=true;
            option.selected=true;
            select.appendChild(option);
        }else{    
            for(var x =0;x<result['length'];x++){            
                var option = document.createElement("option");
                option.value = result[x]['id'];
                if(result[x]['dia']==0){
                    option.text = 'Segunda-feira - '+result[x]['periodo'];
                }else if(result[x]['dia']==1){
                    option.text = 'Terça-feira - '+result[x]['periodo'];
                }else if(result[x]['dia']==2){
                    option.text = 'Quarta-feira - '+result[x]['periodo'];
                }else if(result[x]['dia']==3){
                    option.text = 'Quinta-feira - '+result[x]['periodo'];
                }else if(result[x]['dia']==4){
                    option.text = 'Sexta-feira - '+result[x]['periodo'];
                }else if(result[x]['dia']==5){
                    option.text = 'Sábado - '+result[x]['periodo'];
                }
                select.appendChild(option);
            }
        }
    }
    

    function getHorarios() {
        var id=document.getElementById('curso').value;
        console.log(id);
        fetch('../../controller/aula/getHorariosByCursoJson.php?id_curso='+id)
        .then(response=>{response.json()
            .then(data => populaHorarios(data))
        }).catch(e => console.log('Deu Erro '+e.message));
    };

    const populaAlunos = (result)=>{
        const select = document.getElementById("alunos[]");
        while (select.hasChildNodes()) {
            select.removeChild(select.firstChild);
        }
        if(result['length']==0){
            var option = document.createElement("option");
            option.value = "-1";
            option.text = "Sem alunos matriculados nesse curso";
            option.disabled=true;
            select.appendChild(option);
        }else{
            for(var x =0;x<result['length'];x++){
                console.log(result[x]['nome']);            
                var option = document.createElement("option");
                option.value = result[x]['id'];
                option.text = result[x]['nome'];
                select.appendChild(option);
            }
        }
    };

    function getAlunos() {
        var id=document.getElementById('curso').value;
        console.log(id);
        fetch('../../controller/aula/getAlunosByCursoJson.php?id_curso='+id)
        .then(response=>{response.json()
            .then(data => populaAlunos(data))
        }).catch(e => console.log('Deu Erro '+e.message));
    };
</script>