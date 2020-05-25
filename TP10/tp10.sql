CREATE TABLE etudiant
(
    id serial PRIMARY KEY UNIQUE
    nom VARCHAR (50) NOT NULL
    prenom VARCHAR (50) NOT NULL
    note INTEGER NOT NULL
    user_id INTEGER
)

CREATE TABLE utilisateur
(
    id serial PRIMARY KEY UNIQUE
    login VARCHAR (50) UNIQUE NOT NULL
    password VARCHAR (300) NOT NULL
    mail VARCHAR (50) UNIQUE NOT NULL
    nom VARCHAR (50) NOT NULL
    prenom VARCHAR (50) NOT NULL
)
