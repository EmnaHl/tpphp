<!DOCTYPE html>
<html>
<head>
    <title>Résultats Étudiants</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    require_once 'tp1.php';  
    $etudiant1 = new Etudiant("Aymen", [11, 13, 18, 7,10,13,2,5,1]);
    $etudiant2 = new Etudiant("Skander", [15, 9, 8, 16]);

    echo "<div> Aymen ";
    $etudiant1->afficheNotes();
    $moy=$etudiant1->calculMoyenne();
    echo"<ul id='moy'>{$moy}</ul>";
    echo"</div> ";
    echo "<div>Skander";
    $etudiant2->afficheNotes();  
    $moy=$etudiant2->calculMoyenne();
    echo"<ul id='moy'>{$moy}</ul>";
    echo "</div>"

    ?>
</body>
</html>
