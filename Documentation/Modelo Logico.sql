create table aluno(
    id SERIAL,
    cpf varchar(11) not null,
    nome varchar(100) not null,
    data_nasc date not null,
    responsavel varchar(100),
    username varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,    
    constraint pk_aluno primary key (id)
);

create table professor(
    id SERIAL,
    cpf varchar(11) not null,
    nome varchar(100) not null,
    senha varchar(100) not null,
    email varchar(100) not null,
    contrato varchar(150) not null,
    constraint pk_professor primary key(id) 
);

create table administrador(
    id SERIAL,
    senha varchar(100) not null,
    email varchar(100) not null,
    constraint pk_administrador primary key (id)
);

create table curso(
    id SERIAL,
    nome varchar(100) not null,
    id_professor integer not null,
    constraint pk_curso primary key(id),
    constraint fk_curso_professor foreign key (id_professor) references professor(id)
);

create table matricula(
    id SERIAL,
    id_aluno integer not null,
    id_curso integer not null,
    constraint pk_matricula primary key(id),
    constraint fk_matricula_curso foreign key (id_curso) references curso(id),
    constraint fk_matricula_aluno foreign key (id_aluno) references aluno(id)
);

create table pagamento(
    id SERIAL,
    mes integer not null,
    data_vencimento date not null,
    data_pagamento date not null,
    valor integer not null,
    id_matricula integer not null,
    constraint pk_pagamento primary key(id),
    constraint fk_pagamento_matricula foreign key (id_matricula) references matricula(id)
);

create table musica(
    id SERIAL,
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

create table recital(
    id SERIAL,
    ano varchar(20) not null,
    localizacao varchar(100) not null,
    link text,
    id_aluno integer not null,
    constraint pk_recital primary key(id),
    constraint fk_recital_aluno foreign key (id_aluno) references aluno(id)
);

create table horario(
    id SERIAL,
    dia smallint not null,
    horario smallint not null,
    constraint pk_horario primary key(id)
);

create table professor_horario(
    id SERIAL,
    id_horario integer not null,
    id_professor integer not null,
    constraint pk_professor_horario primary key(id),
    constraint fk_professor_horario_horario foreign key (id_horario) references horario(id),
    constraint fk_professor_horario_professor foreign key (id_professor) references professor(id)
);

create table aula(
    id SERIAL,
    id_curso integer not null,
    id_horario integer not null, 
    constraint pk_aula primary key(id),
    constraint fk_aula_curso foreign key (id_curso) references curso(id),
    constraint fk_aula_horario foreign key (id_horario) references horario(id)
);

create table aluno_aula(
    id SERIAL,
    id_aula integer not null,
    id_aluno integer not null,
    constraint pk_aluno_aula primary key(id),
    constraint fk_aluno_aula_aluno foreign key (id_aluno) references aluno(id),
    constraint fk_aluno_aula_aula foreign key (id_aula) references aula(id),
);

create table recuperacao(
    id SERIAL,
    id_aula integer not null,
    id_horario integer not null,
    constraint pk_recuperacao primary key(id),
    constraint fk_recuperacao_aula foreign key (id_aula) references aula(id),
    constraint fk_recuperacao_horario foreign key (id_horario) references horario(id)
);
