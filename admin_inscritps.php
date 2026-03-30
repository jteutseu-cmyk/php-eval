<?php

$recherche = "";
$resultats = [];
$erreur = "";

// Traitement recherche
if(isset($_POST['recherche'])) {

    $recherche = trim($_POST['recherche']);

    // 1️⃣ Vérifier champ vide
    if($recherche == "") {
        $erreur = "Veuillez entrer un mot à rechercher.";
    } else {

        $fichier = fopen("inscrits.txt", "r");

        // 2️⃣ Lecture ligne par ligne
        while(!feof($fichier)) {

            $ligne = fgets($fichier);

            if(stristr($ligne, $recherche)) {
                $resultats[] = $ligne;
            }
        }

        fclose($fichier);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Administration des inscrits</title>
</head>
<body>

<h2>Administration des inscrits</h2>

<!-- FORMULAIRE -->
<form method="post">
    <input type="text" name="recherche" placeholder="Rechercher un inscrit (prénom ou email)">
    <button type="submit">Rechercher</button>
</form>

<br>

<?php
// Message erreur
if($erreur != "") {
    echo "<p style='color:red;'>$erreur</p>";
}
?>

<table border="1" cellpadding="10">
<tr>
    <th>Prénom</th>
    <th>Email</th>
    <th>Niveau</th>
    <th>Date</th>
</tr>

<?php

// PARTIE A : AFFICHAGE DE LA LISTE DES INSCRITS
if(!isset($_POST['recherche']) || $recherche == "") {

    $fichier = fopen("inscrits.txt", "r");

    while(!feof($fichier)) {

        $ligne = fgets($fichier);

        if(trim($ligne) != "") {

            $data = explode("|", $ligne);

            echo "<tr>";
            echo "<td>" . trim($data[0]) . "</td>";
            echo "<td>" . trim($data[1]) . "</td>";
            echo "<td>" . trim($data[2]) . "</td>";
            echo "<td>" . trim($data[3]) . "</td>";
            echo "</tr>";
        }
    }

    fclose($fichier);
}

// PARTIE B: RECHERCHE PAR MOT CLE
else {

    // Aucun résultat
    if(count($resultats) == 0) {
        echo "<tr><td colspan='4'>Aucun inscrit ne correspond à votre recherche.</td></tr>";
    } else {

        foreach($resultats as $ligne) {

            $data = explode("|", $ligne);

            echo "<tr>";
            echo "<td>" . trim($data[0]) . "</td>";
            echo "<td>" . trim($data[1]) . "</td>";
            echo "<td>" . trim($data[2]) . "</td>";
            echo "<td>" . trim($data[3]) . "</td>";
            echo "</tr>";
        }
    }
}

?>

</table>

<br><br>

//retour a l'inscription
<a href="inscription.php">Retour à l'inscription</a>

</body>
</html>