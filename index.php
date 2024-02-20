<?php

//Question 1
$sentence1 = 'Bonjour, je m’appelle françois dupont, j’ai 35 ans et j’habite paris.';

//Question 2
$sentence2 = "Je suis une \"chaîne de caractères\".";

//Question 3
$presentation = <<<CITATION
    Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre.
    Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer
    que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais
    dans un extrême embarras. Voir, si touchés que je fusse un grand misérable!
    Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et
    inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en
    allait.
    CITATION;

//Question 4
$firstname = "françois";
$lastname = "dupont";
$age = 35;
$city = "paris";

$sentence1Bis = "Bonjour, je m’appelle $firstname $lastname, j’ai $age ans et j’habite $city.";

//Question 5
$lastnameBis = strtoupper($lastname);
$firstnameBis = ucwords($firstname);
$cityBis = ucwords($city);

$sentence1Tris = "Bonjour, je m’appelle $firstnameBis $lastnameBis, j’ai $age ans et j’habite $cityBis.";

//Question 6
$lenFirstname = strlen($firstnameBis);

//Question 7
$presentationBis = ucwords($presentation);

//Question 8
$notes = array(15, 13, 8, 10, 17);

//Question 9
$matieres = array("html/css", "algorithmique", "anglais", "marketing", "ui/ux");

//Question 10
$dernière_note = end($notes);
$dernière_matière = end($matieres);

//Question 11
$nouvelles_notes = array_combine($matieres, $notes);

//Question 12
$nouvelles_notesBis = array_combine($matieres, $notes);
$temp = $nouvelles_notesBis['algorithmique'];
$nouvelles_notesBis['algorithmique'] = $nouvelles_notesBis['marketing'];
$nouvelles_notesBis['marketing'] = $temp;

//Question 13
$notes_etudiants = array(
    "Etudiant1" => array(14, 16, 18, 15, 17),
    "Etudiant2" => array(12, 13, 14, 15, 16),
    "Etudiant3" => array(10, 11, 12, 13, 14),
    "Etudiant4" => array(17, 18, 19, 20, 16)
);

?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "<p>1) $sentence1</p>" ?>
    <?php echo "<p>2) $sentence2</p>" ?>
    <?php echo "<p>3) $presentation</p>" ?>
    <?php echo "<p>4) $sentence1Bis</p>" ?>
    <?php echo "<p>5) $sentence1Tris</p>" ?>
    <?php echo "<p>6) Nombre de lettres du prénom \"$firstnameBis\" : $lenFirstname</p>" ?>
    <?php echo "<p>7) $presentationBis</p>" ?>
    <?php 
    echo "<p>8, 9 et 10) Dernière évaluation de l'étudiant :\n</p>"; 
    echo "<ul>
            <li>Matière : $dernière_matière\n</li>
            <li>Note : $dernière_note\n</li>
        </ul>"
    ?>
    <?php
    echo "<div style='width: 1000px; height: 2px; background-color: #000; margin-bottom: 20px; margin-top: 20px'></div>";
    print_r($nouvelles_notes); 
    echo "<p style='text-decoration: underline; '>Correction du tableau de notes : </p>"; 
    print_r($nouvelles_notesBis);
    echo "<div style='width: 1000px; height: 2px; background-color: #000; margin-bottom: 20px; margin-top: 20px'></div>";
    ?>
    <?php
    echo "<br>";
    echo "<p style='text-decoration: underline; '>Notes de plusieurs étudiants : </p>";
    print_r($notes_etudiants);?>
</body>
</html>
