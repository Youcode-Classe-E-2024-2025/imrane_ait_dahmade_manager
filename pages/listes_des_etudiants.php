<?php

include_once "../configu/configu.php";  // Assurez-vous que la configuration de la connexion à la base de données est correcte

// Définir la requête SQL pour récupérer toutes les données de la table "validation"
$selctetuds = "SELECT * FROM utilisateur";

// Exécuter la requête
$result = $mysqli->query($selctetuds);

// Vérifier si la requête a renvoyé des résultats
if ($result->num_rows > 0) {
    
   
} else {
    echo "Aucun utilisateur trouvé.";
}

// Fermer la connexion
$mysqli->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Users</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 py-10">

  <div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold text-center text-gray-800 mb-8">User List</h1>

    <div class="overflow-x-auto">
      <table class="table-auto w-full border-collapse border border-gray-300">
        <thead class="bg-gray-200">
          <tr>
            <th class="border border-gray-300 px-4 py-2 text-left">ID</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
            <th class="border border-gray-300 px-4 py-2 text-left">Role</th>
          </tr>
        </thead>
        <tbody class="bg-white">
        
                <?php
                // Vérifier si des utilisateurs existent
                if ($result->num_rows > 0) {
                    // Parcourir les résultats
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['id_utilisateur']) . "</td>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['email']) . "</td>";
                       
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['role']) . "</td>";
                     
                        echo "</tr>";

                    }
                } else {
                    echo "<tr>";
                    echo "<td colspan='3' class='px-4 py-2 text-center text-gray-500'>Aucun utilisateur trouvé.</td>";
                    echo "</tr>";
                }
                ?>
            
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>

