<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>DEBUG FORMULAIRE</h2>";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Le formulaire n'envoie pas en POST");
}

echo "POST détecté ✔<br><br>";

if(!isset($_POST['name'], $_POST['email'], $_POST['message'])){
    die("Champs manquants dans le formulaire");
}

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

echo "<b>Données reçues :</b><br>";
echo "Nom : $name <br>";
echo "Email : $email <br>";
echo "Message : $message <br><hr>";

if(empty($name) || empty($email) || empty($message)){
    die("Un champ est vide");
}

$to = "contact@elbaz-sofiane.fr"; // ⚠️ mets ton email domaine ici
$subject = "Message du site";

$body = "
Nom : $name
Email : $email

Message :
$message
";

$headers = "From: contact@tonsite.com\r\n";
$headers .= "Reply-To: $email\r\n";

echo "Tentative d'envoi du mail...<br>";

if(mail($to, $subject, $body, $headers)){
    echo "<span style='color:green;font-weight:bold'>MAIL ENVOYÉ ✅</span>";
}else{
    echo "<span style='color:red;font-weight:bold'>ECHEC ENVOI ❌</span>";
}

?>