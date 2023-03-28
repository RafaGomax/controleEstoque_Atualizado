create schema estoque;
use estoque;


create table item(
	id int not null,
    nome varchar(60) not null,
    descricao varchar(100) not null,
    valor decimal(10,2) not null,
    quant_estoque float not null,
    familia varchar(30) not null,
    primary key(id)
);

create table requisicao(
	id int not null auto_increment,
    cod_item int not null,
    quant int not null, 
    motivo varchar(100) not null, 
    data datetime not null, 
	primary key(id)
);

create table usuario(
	id int not null auto_increment, 
    nome varchar(60) not null,
    tipo int not null,
    email varchar(60) not null unique,
    senha varchar(100) not null,
    primary key(id)    
);


insert into usuario values (null,'Administrador',1,'admin','202cb962ac59075b964b07152d234b70');
insert into item values (123123,'Parafuso','Parafuso Sextavado 3/16',1.50,1000,'Parafusos - Aço');


