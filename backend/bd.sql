-- Create the database
CREATE DATABASE school1;

-- Switch to the newly created database (or select it on the left panel)
USE school1;

-- Create the Etudiant table
CREATE TABLE Etudiant (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    ville VARCHAR(50),
    sexe VARCHAR(20)
);

-- Insert dummy data to test with later
INSERT INTO Etudiant (nom, prenom, ville, sexe) 
VALUES 
('Lachgar', 'Mohamed', 'Rabat', 'homme'),
('Kafi', 'Amina', 'Marrakech', 'femme');