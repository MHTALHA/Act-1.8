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

   
 
   
   public function __toString(){
        return "Pseudo: ".$this->joueurA->getPseudo().PHP_EOL."points de vie: ".$this->joueurA->getPtsVie().PHP_EOL."points de mana: ".$this->joueurA->getPointMana().PHP_EOL."Pseudo: ".$this->joueurB->getPseudo().PHP_EOL."points de vie: ".$this->joueurB->getPtsVie().PHP_EOL."points de mana: ".$this->joueurB->getPointMana().PHP_EOL;
        }
    



function initialiser()

{

echo "Pseudo joueur A: ";

// Ouvre l'entree standard

$handle = fopen ("php://stdin","r");

// Recupere ce que l'utilisateur a ecrit

$line = fgets($handle);

// Créé le joueur avec son nom

$this->joueurA = new Joueur($line);

echo "Pseudo joueur B: ";

$handle = fopen ("php://stdin","r");

$line = fgets($handle);

$this->joueurB = new Joueur($line);

// Ajoute 3 cartes dans les mains de chaque joueur

for($i = 0; $i < 3; $i++)

{

$this->joueurA->piocher($sort=new Sort);

$this->joueurB->piocher($sort=new Sort);

}

}
function lancer()

{

// appelle la fonction d'initialisation plus haut

$this->initialiser();

// affiche le plateau grace à la méthode magique __toString


echo $this;
// Execute ce qu'il y a dans la boucle tant que les 2 joueurs sont vivants

while ($this->joueurA->getPtsVie() > 0 && $this->joueurB->getPtsVie() > 0)

{

echo $this->joueurA->getPseudo() . " es-tu pret ? \n";

$handle = fopen ("php://stdin","r");

$entree = fgets($handle);

$this->joueurA->piocher($sort=new Sort);

$this->joueurA->montrerMain();
//print_r($this->joueurA->montrerMain());
echo $this->joueurA->getPseudo() ." : quelle carte veux-tu jouer ? choisis le chiffre\n";

$handle = fopen ("php://stdin","r");

$entree = fgets($handle);

$this->joueurA->jouer($this->joueurB, (int)$entree);

echo $this;

 

echo $this->joueurB->getPseudo() . " es-tu pret ? \n";

$handle = fopen ("php://stdin","r");

$entree = fgets($handle);

$this->joueurB->piocher($sort=new Sort);

$this->joueurB->montrerMain();

echo $this->joueurB->getPseudo() ." : quelle carte veux-tu jouer ? choisis le chiffre\n";

$handle = fopen ("php://stdin","r");

$entree = fgets($handle);

$this->joueurB->jouer($this->joueurA, (int)$entree);

echo $this;


}
// Si on sort de la boucle c'est qu'un joueur est mort, ceci affiche le résultat

if ($this->joueurA->getPtsVie() <= 0 && $this->joueurB->getPtsVie() <= 0)

{

        echo "Egalite !";

}

else if ($this->joueurA->getPtsVie() <= 0)

        {

                echo $this->joueurA->getPseudo() . ' est un gros loser';

        }

        else if ($this->joueurB->getPtsVie() <= 0)

                {

                        echo $this->joueurB->getPseudo() . ' est un gros loser';

                }}
            }