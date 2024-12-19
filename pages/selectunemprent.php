<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <!-- Formulaire pour demander un emprunt -->
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
  <h2 class="text-2xl font-bold mb-4">Demander un emprunt</h2>
  <form id="demander-emprunt-form" action="demander_emprunt.php" method="POST" class="space-y-4">
    <div>
      <label for="livre" class="block text-gray-700 font-bold mb-2">Sélectionnez un livre :</label>
      <select id="livre" name="id_livre" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        <!-- Remplir dynamiquement via PHP -->
      </select>
    </div>
    <div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Faire une demande</button>
    </div>
    <div id="demander-emprunt-message" class="hidden"></div>
  </form>
</div>
</body>
</html>