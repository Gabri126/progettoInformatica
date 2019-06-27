INSERT INTO utenti (nome, cognome, username, password, email)
VALUES ('Simone', 'Vizzuso', 'user', 'user', 'simone@vizzuso.it');

INSERT INTO utenti (nome, cognome, username, password, email, admin)
VALUES ('Gabiele', 'Vizzuso', 'admin1', 'admin1', 'admin1@admin.it', 1);

INSERT INTO utenti (nome, cognome, username, password, email, admin)
VALUES ('Carlo', 'Valente', 'admin2', 'admin2', 'admin2@admin.it', 1);

INSERT INTO `corsi`(`materia`, `docente1`, `docente2`, `nomecorso`, `crediti`, `descrizione`)
VALUES('Informatica', 'Cristina Gena', '', 'Introduzione all\' informatica e alle reti', 9, 'che bel corso');

INSERT INTO `corsi`(`materia`, `docente1`, `docente2`, `nomecorso`, `crediti`, `descrizione`)
VALUES('Informatica', 'Console Luca', '', 'Sviluppo softwere di applicazioni Informatiche', 12, 'aadasascvda');

INSERT INTO `admin` (nome, cognome, username, password) 
VALUES('Carlo Alberto', 'Valente', 'ca19', '12345');

INSERT INTO `admin` (nome, cognome, username, password) 
VALUES('Gabriele', 'Vizzuso', 'admin', 'admin');