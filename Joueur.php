<?php
require_once('Monstre.php');

class Joueur {
    private string $pseudo;
    private int $ptsVie = 30;
    private int $ptsMana = 10;
    private array $monstresPlace = array();
 
    public function __construct($pseudo){
        $this->pseudo = $pseudo;
    }
 
    public function getMonstresPlace(){
        return $this->monstresPlace;
    }
 
    public function placerMonstre(Monstre $monstre){
 
        while( count($this->monstresPlace)  < 5 ){
            return array_push($this->monstresPlace,$monstre);
            
        }
    }


    public function __toString(){
        $str='';
        foreach($this->monstresPlace as $key => $value){
            $str = $str . 'Monstre n°'. (intval($key) + 1) . ':'.PHP_EOL.'Cout Mana : ' . $value->getCoutMana().PHP_EOL.'Points vie : '.
            $value->getPtsVie().PHP_EOL.'Points degats : '.$value->getPtsDegats().PHP_EOL;
        }
        return 'Joueur : '. $this->pseudo .PHP_EOL. $str;
    }
    
}

$monstre1=new Monstre(1,9,4);
$monstre2=new Monstre(2,8,3);
$monstre3=new Monstre(3,7,2);

$joueur1=new Joueur("med");
$joueur2=new Joueur("samar");

$joueur1->placerMonstre($monstre1);
$joueur1->placerMonstre($monstre2);
$joueur2->placerMonstre($monstre3);

 var_dump($joueur1)."<br>";
 var_dump($joueur2);
 echo $joueur1->__toString();
 echo $joueur2->__toString();