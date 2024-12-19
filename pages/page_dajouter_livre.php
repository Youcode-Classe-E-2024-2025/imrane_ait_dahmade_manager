<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <!-- Formulaire pour ajouter un livre -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
  <h2 class="text-2xl font-bold mb-4">Ajouter un livre</h2>
  <form id="ajouter-livre-form" action="ajouter_livre.php" method="POST" class="space-y-4">
    <div>
      <label for="titre" class="block text-gray-700 font-bold mb-2">Titre :</label>
      <input type="text" id="titre" name="titre" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div>
      <label for="auteur" class="block text-gray-700 font-bold mb-2">Auteur :</label>
      <select id="auteur" name="id_auteur" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <!-- Remplir dynamiquement via PHP -->
      </select>
    </div>
    <div>
      <label for="categorie" class="block text-gray-700 font-bold mb-2">Catégorie :</label>
      <select id="categorie" name="id_categorie" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <!-- Remplir dynamiquement via PHP -->
      </select>
    </div>
    <div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Ajouter</button>
    </div>
    <div id="ajouter-livre-message" class="hidden"></div>
  </form>
</div>

    
</body>
</html>