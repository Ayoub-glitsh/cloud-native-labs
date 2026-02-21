-- Création d'une table utilisateurs 
CREATE TABLE IF NOT EXISTS utilisateurs ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(100) NOT NULL, 
    email VARCHAR(100) UNIQUE NOT NULL, 
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
); 
 -- Insertion de données de test 
INSERT INTO utilisateurs (nom, email) VALUES 
('Jean Dupont', 'jean@example.com'), 
('Marie Martin', 'marie@example.com'), 
('Pierre Durand', 'pierre@example.com'); 
 -- Création d'une table produits 
CREATE TABLE IF NOT EXISTS produits ( 
    id INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(200) NOT NULL, 
    prix DECIMAL(10,2) NOT NULL, 
    stock INT DEFAULT 0 
); 
 -- Insertion de produits de test 
INSERT INTO produits (nom, prix, stock) VALUES 
('Ordinateur portable', 899.99, 10), 
('Souris sans fil', 29.99, 50), 
('Clavier mécanique', 79.99, 25); 