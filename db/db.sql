CREATE DATABASE forumtp2;

CREATE TABLE forum (
    id_forum INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    texte TEXT NOT NULL,
    date DATE NOT NULL,
    id_utilisateur_forum INT NOT NULL,
    FOREIGN KEY (id_utilisateur_forum) REFERENCES utilisateur(id_utilisateur)
);

CREATE TABLE utilisateur (
    id_utilisateur INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(25) NOT NULL,
    date_de_naissance DATE,
    email VARCHAR(30) NOT NULL,
    mot_de_passe VARCHAR(80) NOT NULL,
    login INT DEFAULT 0
);