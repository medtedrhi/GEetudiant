<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once '../service/EtudiantService.php';
    
    // Extract variables from the POST request safely
    extract($_POST);
    
    $es = new EtudiantService();
    // Create a new Etudiant object (ID is passed as 1 temporarily, it's auto-incremented in DB anyway)
    $es->create(new Etudiant(1, $nom, $prenom, $ville, $sexe));
    
    // Set response type to JSON and return the updated list of all students
    header('Content-Type: application/json');
    echo json_encode($es->findAllApi());
}
?>