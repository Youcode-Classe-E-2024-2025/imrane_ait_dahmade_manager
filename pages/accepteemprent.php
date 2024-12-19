<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <!-- Formulaire pour gérer les emprunts (Professeur) -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
  <h2 class="text-2xl font-bold mb-4">Valider ou rejeter une demande d'emprunt</h2>
  <form id="gerer-emprunt-form" action="gerer_emprunt.php" method="POST" class="space-y-4">
    <div>
      <label for="emprunt" class="block text-gray-700 font-bold mb-2">Sélectionnez une demande d'emprunt :</label>
      <select id="emprunt" name="id_emprunt" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <!-- Remplir dynamiquement via PHP -->
      </select>
    </div>
    <div>
      <label for="statut" class="block text-gray-700 font-bold mb-2">Statut :</label>
      <select id="statut" name="statut" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <option value="validé">Valider</option>
        <option value="rejeté">Rejeter</option>
      </select>
    </div>
    <div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Mettre à jour</button>
    </div>
    <div id="gerer-emprunt-message" class="hidden"></div>
  </form>
</div>
</body>
</html>
