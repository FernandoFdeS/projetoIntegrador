<?php
    include '../../layouts/navbar.php';
?>
    
<div class="container">
    <div class="row mt-5">
        <h1 class="mt-1 display-3">Cursos</h1>
        <!-- Span abaixo ficara visivel apenas para administradores -->
        <span class="btn-principal col-md-4 col-sm-12 mx-1 text-center mb-5">
            <a>Adicionar Curso +</a>
        </span>
        <div class="col-12 card d-flex flex-row justify-content-between">
            <div class="d-flex flex-column">
                <p class="m-0 display-6">Nome Curso</p>
                <p class="m-0 text-muted display-3 mb-2" style="font-size:14px">PROFESSOR</p>
            </div>
            <!-- Div abaixo ficara visivel apenas para administradores -->
            <div class="d-flex align-items-center">
                <button class="btn-editar mx-2">
                    <img src="../../images/edit-icon.png" width=40px>
                </button>
                <button class="btn-remover">
                    <img src="../../images/delete-icon.png" width=40px>
                </button>
            </div>
        </div>
    
    </div>
</div>