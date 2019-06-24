create table utenti
(
	nome varchar(30) not null,
	cognome varchar(30) not null,
	username varchar(30) primary key,
	password varchar(30) not null,
	email varchar(30) not null,
	admin tinyint(1) default 0 not null
);