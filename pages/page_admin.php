<?php 
include_once "../actions/affichages_etudiants.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panneau d'administration</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans">
  <header class="bg-white shadow-md py-4">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold text-gray-800">Panneau d'administration</h1>
      <nav>
        <ul class="flex space-x-4">
          <li><a href="listes_des_etudiants.php" class="text-gray-600 hover:text-gray-800">Utilisateurs</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Livres</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Emprunts</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Catégories</a></li>
          <li><a href="#" class="text-gray-600 hover:text-gray-800">Auteurs</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <main class="container mx-auto py-8">
    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
    <h2 class="text-xl font-bold text-gray-800 mb-4"> des utilisateurs veux inscrivez</h2>
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-600">
                  
                    <th class="px-4 py-2 text-left border border-gray-300">Nom</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Email</th>
                    <th class="px-4 py-2 text-left border border-gray-300">Mot de Passe</th>
                    <th>validation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Vérifier si des utilisateurs existent
                if ($result->num_rows > 0) {
                    // Parcourir les résultats
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['nom']) . "</td>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['email']) . "</td>";
                        echo "<td class='px-4 py-2 border border-gray-300'>" . htmlspecialchars($row['mot_de_passe']) . "</td>";
                        echo"<td class='px-4 py-2 border border-gray-300 flex justify-center'><button class='bg-green-700 p-2 text-white '>valider l acception</button> </td>";
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
</section>


    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Gestion des livres</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gray-200 text-gray-600">
              <th class="px-4 py-2 text-left">Titre</th>
              <th class="px-4 py-2 text-left">Auteur</th>
              <th class="px-4 py-2 text-left">Catégorie</th>
              <th class="px-4 py-2 text-left">Disponibilité</th>
              <th class="px-4 py-2 text-left">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Afficher les livres ici -->
          </tbody>
        </table>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Gestion des emprunts</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gray-200 text-gray-600">
              <th class="px-4 py-2 text-left">Utilisateur</th>
              <th class="px-4 py-2 text-left">Livre</th>
              <th class="px-4 py-2 text-left">Date d'emprunt</th>
              <th class="px-4 py-2 text-left">Date de retour</th>
              <th class="px-4 py-2 text-left">Statut</th>
              <th class="px-4 py-2 text-left">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Afficher les emprunts ici -->
          </tbody>
        </table>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Gestion des catégories</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gray-200 text-gray-600">
              <th class="px-4 py-2 text-left">Nom de la catégorie</th>
              <th class="px-4 py-2 text-left">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Afficher les catégories ici -->
          </tbody>
        </table>
      </div>
    </section>

    <section class="bg-white shadow-md rounded-lg p-6 mb-8">
      <h2 class="text-xl font-bold text-gray-800 mb-4">Gestion des auteurs</h2>
      <div class="overflow-x-auto">
        <table class="w-full table-auto">
          <thead>
            <tr class="bg-gray-200 text-gray-600">
              <th class="px-4 py-2 text-left">Nom de l'auteur</th>
              <th class="px-4 py-2 text-left">Actions</th>
            </tr>
          </thead>
          <tbody>
            <!-- Afficher les auteurs ici -->
          </tbody>
        </table>
      </div>
    </section>
  </main>

  <footer class="bg-gray-800 text-white py-4">
    <div class="container mx-auto text-center">
      <p>&copy; 2023 Bibliothèque Universitaire. Tous droits réservés.</p>
    </div>
  </footer>
</body>
</html>