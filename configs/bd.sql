drop database if exists pep2_reservas;
create database pep2_reservas;
use pep2_reservas;

create table users (
    id          int primary key auto_increment,
    name        varchar(255),
    username    varchar(50),
    email       varchar(100),
    senha       varchar(100),
    is_admin    boolean
);

create table salas (
    id          int primary key auto_increment,
    nome        varchar(50),
    bloco       varchar(50)
);

create table equip_types (
    id          int primary key auto_increment,
    tipo        varchar(50)
);

create table equips (
    id          int primary key auto_increment,
    nome        varchar(50),
    quantidade int,
    type_id     int,
    foreign key (type_id) references equip_types (id)
);

create table reservas (
    id          int primary key auto_increment,
    user_id     int,
    sala_id     int,
    hora_ini    timestamp null,
    hora_fim    timestamp null,
    foreign key (user_id) references users (id),
    foreign key (sala_id) references salas (id)
);

create table reservas_equips (
    reserva_id  int,
    equip_id    int,
    foreign key (reserva_id) references reservas (id) on delete cascade,
    foreign key (equip_id) references equips (id) on delete cascade
);

drop user if exists 'pep2';
create user if not exists "pep2" identified with mysql_native_password by "pep2";
grant all privileges on pep2_reservas.* to "pep2";

-- dados de teste

insert into users (name, username, email, senha, is_admin) values
    ('Admin', 'admin', 'ranieri.carvalho@igarassu.ifpe.edu.br', md5('admin'), true)
