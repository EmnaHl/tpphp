<?php

class Etudiant {
    private string $nom;
    private array $notes;

    /** Constructeur */
    public function __construct($name = "", $notes = []) {
        $this->nom = $name;
        $this->notes = $notes;
    }

    /** Affichage des notes */
    public function afficheNotes() {
       
        for ($i = 0; $i < count($this->notes); $i++) {
            $id = "";
            if ($this->notes[$i] < 10) {
                $id = "rouge";
            } elseif ($this->notes[$i] == 10) {
                $id = "orange";
            } else {
                $id = "vert";
            }
            echo "<ul class='note $id'>{$this->notes[$i]}</ul>";
        }

        
    }

    /** Calcul moyenne */
    public function calculMoyenne() {
        if (!empty($this->notes)) {
            $sum = 0;
            for ($i = 0; $i < count($this->notes); $i++) {
                $sum += $this->notes[$i];
            }
            return $sum / count($this->notes);
        }
        return 0;
    }

    /** Affichage résultat (admis ou non) */
    public function resultatEtudiant() {
        $moy = $this->calculMoyenne();
        if ($moy >= 10) {
            echo "Admis<br>";
        } else {
            echo "Non admis <br>";
        }
    }
}

?>
