


-- Création Base de données
CREATE DATABASE IF NOT EXISTS zoo

-- Table: users
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- Table: habitats
CREATE TABLE habitats (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img1 VARCHAR(255) NOT NULL,
    img2 VARCHAR(255) NULL,
    img3 VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- Table: animals
CREATE TABLE animals (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    race VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    etat TEXT NOT NULL,
    img1 VARCHAR(255) NOT NULL,
    img2 VARCHAR(255) NULL,
    img3 VARCHAR(255) NULL,
    img4 VARCHAR(255) NULL,
    img5 VARCHAR(255) NULL,
    habitat_id BIGINT UNSIGNED NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (habitat_id) REFERENCES habitats(id) ON DELETE SET NULL
);

-- Table: services
CREATE TABLE services (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    img1 VARCHAR(255) NOT NULL,
    img2 VARCHAR(255) NULL,
    img3 VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- Table: commentaires
CREATE TABLE commentaires (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pseudo VARCHAR(255) NOT NULL,
    commentaire TEXT NOT NULL,
    validation VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);

-- Table: rapport_vetos
CREATE TABLE rapport_vetos (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    detail TEXT NULL,
    animal_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (animal_id) REFERENCES animals(id) ON DELETE CASCADE
);

-- Table: nourritures
CREATE TABLE nourritures (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    aliment VARCHAR(255) NOT NULL,
    animal_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (animal_id) REFERENCES animals(id) ON DELETE CASCADE
);

-- Table: repas_animals
CREATE TABLE repas_animals (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    quantite INT NOT NULL,
    observation TEXT NULL,
    date DATE NOT NULL,
    animal_id BIGINT UNSIGNED NOT NULL,
    nourriture_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (animal_id) REFERENCES animals(id) ON DELETE CASCADE,
    FOREIGN KEY (nourriture_id) REFERENCES nourritures(id) ON DELETE CASCADE
);

-- Table: animal_nourriture
CREATE TABLE animal_nourriture (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    animal_id BIGINT UNSIGNED NOT NULL,
    nourriture_id BIGINT UNSIGNED NOT NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    FOREIGN KEY (animal_id) REFERENCES animals(id) ON DELETE CASCADE,
    FOREIGN KEY (nourriture_id) REFERENCES nourritures(id) ON DELETE CASCADE
);

-- Table: horaires
CREATE TABLE horaires (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    horaire1 VARCHAR(255) NULL,
    horaire2 VARCHAR(255) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL
);



-- Insertion dans la table `users`
INSERT IGNORE INTO users (name, prenom, email, password, role, created_at, updated_at)
VALUES
('Doe', 'John', 'john.doe@example.com', 'password123', 'admin', NOW(), NOW()),
('Smith', 'Jane', 'jane.smith@example.com', 'password456', 'user', NOW(), NOW());

-- Insertion dans la table `habitats`
INSERT INTO habitats (nom, description, img1, img2, img3, created_at, updated_at)
VALUES
('Jungle', 'Habitat tropical pour animaux exotiques', 'jungle1.jpg', 'jungle2.jpg', 'jungle3.jpg', NOW(), NOW()),
('Savane', 'Espace ouvert pour animaux de la savane', 'savane1.jpg', NULL, NULL, NOW(), NOW());

-- Insertion dans la table `animals`
INSERT INTO animals (race, prenom, etat, img1, img2, img3, img4, img5, habitat_id, created_at, updated_at)
VALUES
('Lion', 'Simba', 'En bonne santé', 'lion1.jpg', 'lion2.jpg', NULL, NULL, NULL, 2, NOW(), NOW()),
('Éléphant', 'Dumbo', 'Blessé à la patte', 'elephant1.jpg', 'elephant2.jpg', NULL, NULL, NULL, 2, NOW(), NOW());

-- Insertion dans la table `services`
INSERT INTO services (nom, description, img1, img2, img3, created_at, updated_at)
VALUES
('Visite guidée', 'Tour complet du zoo avec guide', 'guide1.jpg', NULL, NULL, NOW(), NOW()),
('Soins vétérinaires', 'Service de santé pour les animaux', 'soins1.jpg', NULL, NULL, NOW(), NOW());

-- Insertion dans la table `commentaires`
INSERT INTO commentaires (pseudo, commentaire, validation, created_at, updated_at)
VALUES
('User1', 'Super zoo, très bien entretenu !', 'validé', NOW(), NOW()),
('User2', 'Les animaux semblent heureux.', NULL, NOW(), NOW());

-- Insertion dans la table `rapport_vetos`
INSERT INTO rapport_vetos (date, detail, animal_id, created_at, updated_at)
VALUES
('2024-01-01', 'Contrôle de routine, pas de problème.', 1, NOW(), NOW()),
('2024-01-02', 'Traitement pour une blessure mineure.', 2, NOW(), NOW());

-- Insertion dans la table `nourritures`
INSERT INTO nourritures (aliment, animal_id, created_at, updated_at)
VALUES
('Foin', 1, NOW(), NOW()),
('Viande', 1, NOW(), NOW());

-- Insertion dans la table `repas_animals`
INSERT INTO repas_animals (quantite, observation, date, animal_id, nourriture_id, created_at, updated_at)
VALUES
(5, 'Repas du matin', '2024-01-03', 1, 2, NOW(), NOW()),
(10, 'Repas du soir', '2024-01-03', 2, 1, NOW(), NOW());

-- Insertion dans la table `horaires`
INSERT INTO horaires (horaire1, horaire2, created_at, updated_at)
VALUES
('09:00', '12:00', NOW(), NOW()),
('14:00', '18:00', NOW(), NOW());
