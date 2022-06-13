<?php 


abstract class Carte {

    protected int $coutMana;
    protected int $nbDegat;

    public function __construct(){
        
        $this->coutMana=rand(1,10);
        $this->nbDegat=rand(1,10);
 }

 public function getCoutMana(){
        return $this->coutMana;
 }
 public function getPtsDegats(){
    return $this->nbDegat;
}
 abstract public function attaquer(DamageableInterface  $monstre);


}