<?php

// Esse arquivo contém uma implementação simples de uma "conexão" com um banco de dados Sqlite.
// O arquivo é apenas um exemplo de como conectar com um banco de dados.

// Caminho para o arquivo do banco de dados SQlite. Isso só existe no caso desse banco.
// Se estivéssemos usando um banco de dados MySQL, por exemplo, o caminho seria:
//       $db_path = 'mysql:host=localhost;dbname=nomedobanco';
// Veja mais informações em: https://www.php.net/manual/pt_BR/book.pdo.php
$arquivo = $_SERVER['DOCUMENT_ROOT'].'/Code/db/database.sqlite';

// Essa será a variável que qualquer página poderá utilizar
// para acessar o banco de dados depois de incluir `db.php`
$db = null;

try {
    // Se o arquivo com os dados do banco não existe, cria um e inicializa
    // as tabelas para uso.
    $deve_inicializar_banco = false;

    if(!file_exists($arquivo)) {
        $deve_inicializar_banco = true;
    }

    // "Conecta" com o banco de dados
    $db = new PDO("sqlite:$arquivo");

    if ($deve_inicializar_banco) {
        // Cria as tabelas no banco de dados para uso futuro
        $db->exec(
            'CREATE TABLE administrador(
                id INTEGER PRIMARY KEY,
                senha varchar(100) not null,
                email varchar(100) not null
            );
            CREATE TABLE aluno(
                id INTEGER PRIMARY KEY,
                cpf varchar(11) not null,
                nome varchar(100) not null,
                username varchar(100) not null,
                responsavel varchar(100),
                data_nasc date not null,
                senha varchar(100) not null,
                email varchar(100) not null                    
            );
            CREATE TABLE professor(
                id INTEGER PRIMARY KEY ,
                cpf varchar(11) not null,
                nome varchar(100) not null,
                senha varchar(100) not null,
                email varchar(100) not null,
                contrato varchar(150)
            );
            CREATE TABLE curso(
                id INTEGER PRIMARY KEY,
                nome varchar(100) not null,
                id_professor integer not null,
                FOREIGN KEY (id) references professor(id_professor)
            );
            CREATE TABLE matricula(
                id INTEGER PRIMARY KEY,
                id_aluno integer not null,
                id_curso integer not null,    
                foreign key (id) references curso(id_curso),
                foreign key (id) references aluno(id_aluno)
            );
            CREATE TABLE musica(
                id INTEGER PRIMARY KEY,
                nome varchar(100) not null,
                artista varchar(100) not null,
                anotacoes varchar(300) not null,
                progessao smallint not null, -- 0 -> aprendendo, 1 -> completo, 2 -> em espera, 3 -> planejando aprender
                cifra varchar(150),
                link varchar(150),
                arquivo_musica varchar(150),
                instrumento smallint not null,
                id_aluno integer not null,
                foreign key (id) references aluno(id_aluno)
            );
            CREATE TABLE horario(
                id INTEGER PRIMARY KEY,
                dia smallint not null,
                horario smallint not null   
            );

            CREATE TABLE professor_horario(
                id INTEGER PRIMARY KEY,
                id_horario integer not null,
                id_professor integer not null,    
                foreign key (id) references horario(id_horario),
                foreign key (id) references professor(id_professor)
            );

            CREATE TABLE aula(
                id INTEGER PRIMARY KEY,
                id_curso integer not null,
                id_horario integer not null, 
                foreign key (id) references curso(id_curso),
                foreign key (id) references horario(id_horario)
            );

            CREATE TABLE aluno_aula(
                id INTEGER PRIMARY KEY,
                id_aula integer not null,
                id_aluno integer not null,
                foreign key (id) references aluno(id_aluno),
                foreign key (id) references aula(id_aula)
            );
            INSERT INTO administrador(senha,email) values ("senha","adm");
            INSERT INTO aluno(cpf,nome,data_nasc,senha,email) values ("00000000001","Aluno Teste","2002-01-01","senha","aluno");
            INSERT INTO professor(cpf,nome,senha,email) values ("00000000002","Professor Teste","senha","professor")'
        );  
    }
} catch (PDOException $e) {
    echo 'Erro com o banco de dados: ' . $e->getMessage();
    exit();
}

?>