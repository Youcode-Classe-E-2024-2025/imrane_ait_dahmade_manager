<?php
include_once "../configu/configu.php";  

// Vérification que la méthode HTTP est bien POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si tous les champs sont présents
    if (!isset($_POST['nom'], $_POST['email'], $_POST['mot_de_passe'])) {
        die("Tous les champs doivent être remplis.");
    }

    // Récupérer les valeurs des champs
    $nom = trim($_POST['nom']);
    $email = trim($_POST['email']);
    $mot_de_passe = trim($_POST['mot_de_passe']); 

    // Définir les expressions régulières
    $regex_nom = '/^[a-zA-ZÀ-ÿ\s\-]{3,50}$/';  
    $regex_email = '/^[\w\.-]+@([\w-]+\.)+[\w-]{2,4}$/';  
    $regex_mot_de_passe = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/'; 

    // Validation des champs avec des regex
    if (!preg_match($regex_nom, $nom)) {
        die("Nom d'utilisateur invalide. (3-50 caractères, lettres et espaces autorisés.)");
    }

    if (!preg_match($regex_email, $email)) {
        die("Email invalide.");
    }

    if (!preg_match($regex_mot_de_passe, $mot_de_passe)) {
        die("Mot de passe invalide. Il doit contenir des majuscules, minuscules, chiffres et caractères spéciaux.");
    }

    // 
    // $sql = "SELECT COUNT(*) FROM utilisateur WHERE email = ?";
    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param("s", $email);  
    // $stmt->execute();
    // $stmt->bind_result($count);
    // $stmt->fetch();
    // if ($count > 0) {
    //     die("L'email est déjà utilisé.");
    // }

    // 
    // $sql = "SELECT COUNT(*) FROM utilisateur WHERE nom = ?";
    // $stmt = $mysqli->prepare($sql);
    // $stmt->bind_param("s", $nom);  
    // $stmt->execute();
    // $stmt->bind_result($count);
    // $stmt->fetch();
    // if ($count > 0) {
    //     die("Le nom d'utilisateur est déjà pris.");
    // }

  
    $mot_de_passe_hashed = password_hash($mot_de_passe, PASSWORD_DEFAULT); 

    // Insertion de l'utilisateur dans la base de données
    $ajouter_table = "INSERT INTO validation (nom, email, mot_de_passe) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($ajouter_table);
    
    if ($stmt === false) {
        die("Erreur dans la préparation de la requête: " . $mysqli->error);
    }

    $stmt->bind_param("sss", $nom, $email, $mot_de_passe_hashed);
    
    // Exécution de la requête d'insertion
    if ($stmt->execute()) {
        echo "Utilisateur ajouté avec succès.";
    } else {
        echo "Erreur lors de l'ajout de l'utilisateur: " . $stmt->error;
    }

    // Fermer la requête
    $stmt->close();
}

// Fermer la connexion MySQL
$mysqli->close();
?>
