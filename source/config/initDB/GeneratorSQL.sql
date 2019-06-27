create table utenti
(
	nome varchar(30) not null,
	cognome varchar(30) not null,
	username varchar(30) primary key,
	password varchar(30) not null,
	email varchar(30) not null,
	admin tinyint(1) default 0 not null
);

CREATE TABLE `corsi` (
  `materia` varchar(100) NOT NULL,
  `docente1` varchar(100) NOT NULL,
  `docente2` varchar(100) NOT NULL,
  `nomecorso` varchar(100) NOT NULL,
  `crediti` int(11) NOT NULL,
  `descrizione` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `admin` (
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;