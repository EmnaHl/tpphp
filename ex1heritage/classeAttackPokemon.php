<?php
class attackPokemon{
    public function __construct($attackmin,$attackmax,$special,$probability){
        $this->attackmin=$attackmin;
        $this->attackmax=$attackmax;
        $this->special=$special;
        $this->probability=$probability;
    }
    public function getAttackMin() {
        return $this->attackmin;
    }
    public function getAttackMax() {
        return $this->attackmax;
    }
    public function getSpecial() {
        return $this->special;
    }
    public function getProbability() {
        return $this->probability;
    }
    
    public function calculAttack(){
        $normalAttack = rand($this->attackmin, $this->attackmax);
        if ($this->probability>=50){
            $normalAttack*=$this->special;
        }
        return $normalAttack;

    }




}

?>