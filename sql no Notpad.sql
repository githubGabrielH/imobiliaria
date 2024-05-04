create database imobiliaria;
use imobiliaria;

create table usuario(
	id int(4) auto_increment PRIMARY KEY,
	login varchar(10),
	senha varchar (100),
	permissao char(1)
);

create TABLE imovel(
	id int(4) auto_increment PRIMARY KEY,
	descricao VARCHAR(200),
	foto varchar(30),
	valor decimal(9,2),
	tipo char(1)
);

create table visualizacao(
	id int(4) auto_increment PRIMARY KEY,
	idUsuario int(4) not null,
	idImovel int (4) not null,
	data date,
	hora time,
	FOREIGN key(idUsuario) references Usuario(id),
    FOREIGN key(idImovel) references Imovel(id)

);