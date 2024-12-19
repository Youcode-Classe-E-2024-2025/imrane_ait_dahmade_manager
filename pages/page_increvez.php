<?php
include '../actions/create_user.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - École</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-full max-w-md">
  <h2 class="text-2xl font-bold mb-4">Inscription</h2>
  <form id="inscription-form" action="../actions/create_user.php" method="POST" class="space-y-4">
    <div id="place_name">
      <label for="nom" class="block text-gray-700 font-bold mb-2">Nom :</label>
      <input type="text" id="nom" name="nom" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div id="place_email">
      <label for="email" class="block text-gray-700 font-bold mb-2">Email :</label>
      <input type="email" id="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div id="place_password">
      <label for="mot_de_passe" class="block text-gray-700 font-bold mb-2">Mot de passe :</label>
      <input type="password" id="mot_de_passe" name="mot_de_passe" required minlength="6" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
      <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">S'inscrire</button>
    </div>
    <div id="inscription-message" class="hidden"></div>
  </form>
</div>

</body>
<script src="../cript.js"></script>
</html>