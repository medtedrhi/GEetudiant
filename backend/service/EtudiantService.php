<?php
include_once '../classes/Etudiant.php';
include_once '../connexion/Connexion.php';
include_once '../dao/IDao.php';

class EtudiantService implements IDao {
    private $connexion;

    function __construct() {
        // Instantiate the connection when the service is created
        $db = new Connexion();
        $this->connexion = $db->getConnexion();
    }

    // Method to insert a new student
    public function create($o) {
        $query = "INSERT INTO Etudiant (nom, prenom, ville, sexe) VALUES (:nom, :prenom, :ville, :sexe)";
        $stmt = $this->connexion->prepare($query);
        $stmt->execute([
            'nom' => $o->getNom(),
            'prenom' => $o->getPrenom(),
            'ville' => $o->getVille(),
            'sexe' => $o->getSexe()
        ]);
    }

    // Method to fetch all students as an associative array (easier for JSON encoding)
    public function findAllApi() {
        $req = $this->connexion->query("SELECT * FROM Etudiant");
        return $req->fetchAll(PDO::FETCH_ASSOC);
    }

    // Empty implementations to satisfy the interface (can be filled later for the Challenge)
    public function delete($o) {}
    public function update($o) {}
    public function findAll() {}
    public function findById($id) {}
}
?>