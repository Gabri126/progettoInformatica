CREATE TABLE `utenti` (
    `nome` varchar(30) NOT NULL,
    `cognome` varchar(30) NOT NULL,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    `email` varchar(30) NOT NULL
);

CREATE TABLE `corsi` (
    `materia` varchar(100) NOT NULL,
    `docente1` varchar(100) NOT NULL,
    `docente2` varchar(100) NOT NULL,
    `nomecorso` varchar(100) NOT NULL,
    `crediti` int(11) NOT NULL,
    `descrizione` varchar(10000) NOT NULL
);

CREATE TABLE `admin` (
    `nome` varchar(30) NOT NULL,
    `cognome` varchar(30) NOT NULL,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL
);