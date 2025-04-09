<?php
class Session{

public function __construct(){
    session_start();
 }  

/**obtenir le nombre de visite */
public function getNbvisite(){
    return $_SESSION['Nbvisite'] ?? 0; 
}

/**incrementer le nbre de visite */
public function increment(){
    $_SESSION['Nbvisite'] = $this->getNbvisite() + 1;
}

/**initialiser le nombre de visite */
public function reset(){
    $_SESSION['Nbvisite'] = 0; 
}

/**detruire la session*/
public function detruit(){
    session_unset();
    session_destroy();
}

}

?>