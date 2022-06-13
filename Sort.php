<?php
require_once('Carte.php');
require("DamageableInterface.php");

class Sort extends Carte implements  DamageableInterface{


   public function __construct(int $coutMana,int $nbDegat){

      parent::__construct($coutMana,$nbDegat);
     
  
}
public function  takeDamages(int $n):int{
   if($n<$this->ptsVie){
      return $this->ptsVie-=$n;
   }else {
      return 0;
   }
   
 }

 public function attaquer(DamageableInterface $monstre){

   return $monstre->takeDamages($this->nbDegat);
 }

 

}
