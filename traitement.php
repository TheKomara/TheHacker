<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];

// Vérifier si le fichier CSV existe, sinon le créer avec l'en-tête
if (!file_exists('donnees.csv')) {
    $header = array('Nom', 'Prénom');
    $fp = fopen('donnees.csv', 'w');
    fputcsv($fp, $header);
    fclose($fp);
}

// Ajouter les données saisies dans le fichier CSV
$data = array($nom, $prenom);
$fp = fopen('donnees.csv', 'a');
fputcsv($fp, $data);
fclose($fp);

echo " Votre verification et securisation est en cours !!! vous recevrez un message dans un instant";
?>
