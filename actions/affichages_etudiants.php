<?php 
include_once "../configu/configu.php";  // Assurez-vous que la configuration de la connexion à la base de données est correcte

// Définir la requête SQL pour récupérer toutes les données de la table "validation"
$selctetuds = "SELECT * FROM validation";

// Exécuter la requête
$result = $mysqli->query($selctetuds);

// Vérifier si la requête a renvoyé des résultats
if ($result->num_rows > 0) {
    // Boucler à travers les résultats et afficher les données
   
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion
$mysqli->close();
?>
