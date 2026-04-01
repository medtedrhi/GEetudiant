<?php
include_once '../service/EtudiantService.php';
$es = new EtudiantService();

// Return all students in JSON format
header('Content-Type: application/json');
echo json_encode($es->findAllApi());
?>