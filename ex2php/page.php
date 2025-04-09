<?php
require_once 'classeSession.php';
$session = new Session();
$nbvisite=$session->getNbvisite();
if($nbvisite>0){
    $msg="Merci pour votre fidélité,c’est votre $nbvisite eme visite";
}else{
    $msg="Bienvenue à notre plateforme";
}
$session->increment();
if (isset($_POST['reset'])) {
    $session->reset();
    $msg="Bienvenue à notre plateforme";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Page d'accueil</title>

</head>
<body>
 <p><?php echo $msg ?></p>
 <form method="POST">
    <button type="submit" name="reset">Réinitialiser la session</button>
 </form>
 </body>
</html>
