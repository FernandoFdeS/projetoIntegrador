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
                periodo varchar(15)   
            );

            CREATE TABLE professor_horario(
                id INTEGER PRIMARY KEY,
                disponivel INTEGER not null,
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
            INSERT INTO aluno(cpf,nome,username,data_nasc,senha,email) values ("00000000001","Aluno Teste","usernameAluno","2002-01-01","senha","aluno");
            INSERT INTO professor(cpf,nome,senha,email) values ("00000000002","Professor Teste","senha","professor");
            INSERT INTO horario(dia,periodo) values (0,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (0,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (0,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (0,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (0,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (0,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (0,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (0,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (0,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (0,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (0,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (0,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (0,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (0,"21:00-22:00");
            INSERT INTO horario(dia,periodo) values (1,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (1,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (1,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (1,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (1,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (1,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (1,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (1,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (1,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (1,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (1,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (1,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (1,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (1,"21:00-22:00");
            INSERT INTO horario(dia,periodo) values (2,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (2,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (2,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (2,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (2,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (2,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (2,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (2,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (2,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (2,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (2,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (2,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (2,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (2,"21:00-22:00");
            INSERT INTO horario(dia,periodo) values (3,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (3,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (3,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (3,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (3,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (3,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (3,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (3,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (3,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (3,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (3,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (3,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (3,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (3,"21:00-22:00");
            INSERT INTO horario(dia,periodo) values (4,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (4,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (4,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (4,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (4,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (4,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (4,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (4,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (4,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (4,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (4,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (4,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (4,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (4,"21:00-22:00");
            INSERT INTO horario(dia,periodo) values (5,"07:00-08:00");
            INSERT INTO horario(dia,periodo) values (5,"08:00-09:00");
            INSERT INTO horario(dia,periodo) values (5,"09:00-10:00");
            INSERT INTO horario(dia,periodo) values (5,"10:00-11:00");
            INSERT INTO horario(dia,periodo) values (5,"11:00-12:00");
            INSERT INTO horario(dia,periodo) values (5,"13:00-14:00");
            INSERT INTO horario(dia,periodo) values (5,"14:00-15:00");
            INSERT INTO horario(dia,periodo) values (5,"15:00-16:00");
            INSERT INTO horario(dia,periodo) values (5,"16:00-17:00");
            INSERT INTO horario(dia,periodo) values (5,"17:00-18:00");
            INSERT INTO horario(dia,periodo) values (5,"18:00-19:00");
            INSERT INTO horario(dia,periodo) values (5,"19:00-20:00");
            INSERT INTO horario(dia,periodo) values (5,"20:00-21:00");
            INSERT INTO horario(dia,periodo) values (5,"21:00-22:00")
            
            '
        );  
    }
} catch (PDOException $e) {
    echo 'Erro com o banco de dados: ' . $e->getMessage();
    exit();
}

?>