// Récupérer les éléments du DOM
const nom = document.getElementById('nom');
const email = document.getElementById('email');
const mot_de_passe = document.getElementById('mot_de_passe');


const regex_name = /^[a-zA-Z0-9]{3,20}$/; 
const regex_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/; 
const regex_password = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/; // Mot de passe sécurisé


function error(placeId, message) {
    const place = document.getElementById(placeId); 
    if (place) {

        let existingError = place.querySelector('.error-message');
        if (existingError) {
            existingError.textContent = message; 
        } else {
           
            const box = document.createElement('div');
            box.classList.add('error-message', 'text-red-400'); 
            box.textContent = message;
            place.appendChild(box); 
        }
    }
}


function validateForm(event) {

    event.preventDefault();
    let isValid = true;

    
    if (!regex_name.test(nom.value)) {
        error('place_name', 'Le nom doit contenir entre 3 et 20 caractères alphanumériques.');
        isValid = false;
    } else {
        clearError('place_name'); 
    }

  
    if (!regex_email.test(email.value)) {
        error('place_email', 'Veuillez entrer une adresse email valide.');
        isValid = false;
    } else {
        clearError('place_email');
    }

   
    if (!regex_password.test(mot_de_passe.value)) {
        error('place_password', 'Le mot de passe doit contenir au moins 8 caractères, une majuscule, une minuscule, un chiffre et un symbole spécial.');
        isValid = false;
    } else {
        clearError('place_password');
    }

  
    if (isValid) {
        alert('Formulaire soumis avec succès !');
       
      
    }
}

// Fonction pour supprimer les messages d'erreur
function clearError(placeId) {
    const place = document.getElementById(placeId);
    if (place) {
        const errorBox = place.querySelector('.error-message');
        if (errorBox) {
            errorBox.remove(); // Supprime le message d'erreur
        }
    }
}

// Ajouter un écouteur d'événement pour valider à la soumission du formulaire
const form = document.getElementById('inscription-form');
if (form) {
    form.addEventListener('submit', validateForm);
}
