<?php
require("Carte.php");

require("DamageableInterface.php");

class Monstre extends Carte implements  DamageableInterface {

 
 protected int $ptsVie;
 

 
 public function __construct(){
       $ptsVie=rand(0,30);
        parent::__construct();
        $this->ptsVie=$ptsVie;
    
 }

 public function getPtsVie():int{
   return $this->ptsVie;
   
}
public function getNbDegat():int{

   return $this->nbDegat;
}
// public function minusNbVie($nbDegat):int{

//     return $this->ptsVie-=$nbDegat;
//  }
 
public function  takeDamages(int $n):int{
   if($n<$this->ptsVie){
      return $this->ptsVie-=$n;
   }else {
      return 0;
   }
   
 }

 public function attaquer(DamageableInterface  $monstre){
        
    return $monstre->takeDamages($this->nbDegat);
 }

 

}


 $monstre1 = new Monstre();
 $monstre2 = new Monstre();


 $monstre2->attaquer($monstre1).PHP_EOL;

 print_r(var_dump($monstre1));
 print_r(var_dump($monstre2));