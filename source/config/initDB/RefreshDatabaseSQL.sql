Database utenti

INSERT INTO utenti (nome, cognome, username, password, email)
VALUES ('Simone', 'Vizzuso', 'Vizzu95', 'qwerty', 'simone@vizzuso.it');


INSERT INTO utenti (nome, cognome, username, password, email, admin)
VALUES ('Gabiele', 'Vizzuso', 'admin1', 'admin1', 'admin1@admin.it', 1);


INSERT INTO utenti (nome, cognome, username, password, email, admin)
VALUES ('Carlo', 'Valente', 'admin2', 'admin2', 'admin2@admin.it', 1);






Database corsi

INSERT INTO corsi (materia, docente1, docente2, nome, crediti, descrizione) 
VALUES('Informatica', 'Cristina Gena', '', 'Introduzione all\' informatica e alle reti', 9, 'che bel corso');

INSERT INTO corsi (materia, docente1, docente2, nome, crediti, descrizione) 
VALUES('Informatica', 'Console Luca', '', 'Sviluppo softwere di applicazioni Informatiche', 12, 'aadasascvda');


Database admin

INSERT INTO `admin` (nome, cognome, username, password) 
VALUES('Carlo Alberto', 'Valente', 'ca19', '12345');

INSERT INTO `admin` (nome, cognome, username, password) 
VALUES('Gabriele', 'Vizzuso', 'Gabri126', '12345');