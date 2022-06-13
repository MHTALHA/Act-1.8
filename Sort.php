<?php
require_once('Carte.php');


class Sort extends Carte {


   public function __construct(){

      parent::__construct();
     
  
}


 public function attaquer(DamageableInterface $monstre){

   return $monstre->takeDamages($this->nbDegat);
 }

 

}
