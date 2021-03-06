CREATE TABLE aluno(
    id INTEGER PRIMARY KEY ,
    cpf varchar(11) not null,
    nome varchar(100) not null,
    data_nasc date not null,
    responsavel varchar(100),
    username varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,    
    constraint pk_aluno primary key (id)
);

CREATE TABLE professor(
    id INTEGER PRIMARY KEY ,
    cpf varchar(11) not null,
    nome varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    contrato varchar(150) not null,
    constraint pk_professor primary key(id) 
);

CREATE TABLE administrador(
    id INTEGER PRIMARY KEY ,
    senha varchar(100) not null,
    email varchar(100) not null,
    constraint pk_administrador primary key (id)
);

CREATE TABLE curso(
    id INTEGER PRIMARY KEY ,
    nome varchar(100) not null,
    id_professor integer not null,
    constraint pk_curso primary key(id),
    constraint fk_curso_professor foreign key (id_professor) references professor(id)
);

CREATE TABLE matricula(
    id INTEGER PRIMARY KEY ,
    id_aluno integer not null,
    id_curso integer not null,
    constraint pk_matricula primary key(id),
    constraint fk_matricula_curso foreign key (id_curso) references curso(id),
    constraint fk_matricula_aluno foreign key (id_aluno) references aluno(id)
);

CREATE TABLE pagamento(
    id INTEGER PRIMARY KEY ,
    mes integer not null,
    data_vencimento date not null,
    data_pagamento date not null,
    valor integer not null,
    id_matricula integer not null,
    constraint pk_pagamento primary key(id),
    constraint fk_pagamento_matricula foreign key (id_matricula) references matricula(id)
);

CREATE TABLE musica(
    id INTEGER PRIMARY KEY ,
    nome varchar(100) not null,
    artista varchar(100) not null,
    anotacoes varchar(300) not null,
    progessao smallint not null, -- 0 -> aprendendo, 1 -> completo, 2 -> em espera, 3 -> planejando aprender
    cifra varchar(150) not null,
    link varchar(150) not null,
    arquivo_musica varchar(150) not null,
    instrumento smallint not null,
    id_aluno integer not null,
    constraint pk_musica primary key(id),    
    constraint fk_musica_aluno foreign key (id_aluno) references aluno(id)
);

CREATE TABLE recital(
    id INTEGER PRIMARY KEY ,
    ano varchar(20) not null,
    localizacao varchar(100) not null,
    link text,
    constraint pk_recital primary key(id),
);

CREATE TABLE aluno_recital(
    id INTEGER PRIMARY KEY ,
    data_apresentacao date not null;
    ordem smallint not null;
    id_recital integer not null;
    id_aluno integer not null;
    constraint fk_aluno_recital_aluno foreign key (id_aluno) references aluno(id);
    constraint fk_aluno_recital_recital foreign key (id_recital) references recital(id)
);

CREATE TABLE horario(
    id INTEGER PRIMARY KEY ,
    dia smallint not null,
    horario smallint not null,
    constraint pk_horario primary key(id)
);

CREATE TABLE professor_horario(
    id INTEGER PRIMARY KEY ,
    id_horario integer not null,
    id_professor integer not null,
    constraint pk_professor_horario primary key(id),
    constraint fk_professor_horario_horario foreign key (id_horario) references horario(id),
    constraint fk_professor_horario_professor foreign key (id_professor) references professor(id)
);

CREATE TABLE aula(
    id INTEGER PRIMARY KEY ,
    id_curso integer not null,
    id_horario integer not null, 
    constraint pk_aula primary key(id),
    constraint fk_aula_curso foreign key (id_curso) references curso(id),
    constraint fk_aula_horario foreign key (id_horario) references horario(id)
);

CREATE TABLE aluno_aula(
    id INTEGER PRIMARY KEY ,
    id_aula integer not null,
    id_aluno integer not null,
    constraint pk_aluno_aula primary key(id),
    constraint fk_aluno_aula_aluno foreign key (id_aluno) references aluno(id),
    constraint fk_aluno_aula_aula foreign key (id_aula) references aula(id),
);

CREATE TABLE recuperacao(
    id INTEGER PRIMARY KEY ,
    id_aula integer not null,
    id_horario integer not null,
    constraint pk_recuperacao primary key(id),
    constraint fk_recuperacao_aula foreign key (id_aula) references aula(id),
    constraint fk_recuperacao_horario foreign key (id_horario) references horario(id)
);
