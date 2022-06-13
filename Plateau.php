<?php
require('Joueur.php');
class Plateau {
   
    private static int $nbMonstreParJoueur=5;
    private Joueur $joueurA ;
    private Joueur $joueurB ;
 
    public function __construct(Joueur $joueurA, Joueur $joueurB){
        $this->joueurA = $joueurA;
        $this->joueurB = $joueurB;
    }

   
 
   

    
}

$plateau1=new Plateau($joueur1,$joueur2);

print_r($plateau1);