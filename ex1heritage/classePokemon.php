<?php
require_once 'classeAttackPokemon.php';
class Pokemon{
   private $name;
   private $url;
   private $hp;
   private $attackpokemon;
  
   public function __construct($name,$url,$hp,$attackPokemon){
    $this->name=$name;
    $this->url = $url;
    $this->hp = $hp;
    $this->attackPokemon = $attackPokemon;
   }
    /**Setter pour le nom */ 
    public function setName($name) {
        $this->name = $name;
    }
    /**getter pour le nom */
    public function getName(){
        return $this->name;
    }

    /**getter pour l'url */
    public function getUrl() {
        return $this->url;}
    
    /**setter pour l'url */
    public function setUrl($url) {
        $this->url = $url;
    }

    /**getter pour les hp */
    public function getHp() {
        return $this->hp;
    }

    /**setter pour les hp */
    public function setHp($hp) {
        $this->hp = $hp;
    }

    /**methode isDead */
    public function isDead(){
        if($this->hp<=0){
            return TRUE;
        }
        else{return FALSE;}
    }

    /**methode attack */
    public function attack(Pokemon $p){
        $attackpoints=$this->attackPokemon->calculAttack();
        $p->setHp($p->getHp()-$attackpoints);
    }

    public function whoAmI(){
        echo"Nom: {$this->name}. URL Image: {$this->url}. Points de vie: {$this->hp}";
    }




}



?>