<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Construire le corps de l'email
    $subject = "Nouveau message de contact";
    $messageBody = "Email: $email\n\nMessage:\n$message";

    // Envoyer l'email
    $to = 'v.parrot@exemple.com';
    $headers = "From: $email";

    // Envoyer l'email
    if (mail($to, $subject, $messageBody, $headers)) {
        // Redirection vers une page de confirmation
        header('Location: confirmation_contact.php');
        exit();
    } else {
        // En cas d'échec de l'envoi de l'email, affichez un message d'erreur
        echo "Erreur lors de l'envoi de l'email. Veuillez réessayer.";
    }
}
?>
