<?php

// Récupère les données JSON de la requête POST
$jsonData = file_get_contents("php://input");

try {
    // Écrit les données JSON dans le fichier edit.json
    file_put_contents('edit.json', $jsonData);

    // Répond avec un statut de succès
    http_response_code(200);
    echo json_encode(array("success" => true));
} catch (Exception $e) {
    // En cas d'erreur, répond avec un statut d'erreur
    http_response_code(500);
    echo json_encode(array("success" => false, "error" => "Internal Server Error"));
}

?>
