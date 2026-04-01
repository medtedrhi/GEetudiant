<?php
class Connexion {
    private $connexion;

    public function __construct() {
        try {
            // Connect to MySQL using PDO. Change "root" and "" if you have a custom MySQL user/password.
            $this->connexion = new PDO("mysql:host=localhost;dbname=school1;charset=utf8", "root", "");
            // Enable exceptions for database errors
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Stop execution and show error if connection fails
            die("Erreur : " . $e->getMessage());
        }
    }

    // Returns the active connection object
    public function getConnexion() {
        return $this->connexion;
    }
}
?>