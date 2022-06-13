<?php

require_once 'plateau.php';

$joueur1=new Joueur("med");
$joueur2=new Joueur("samar");
$plateau = new Plateau($joueur1,$joueur2);


$plateau->lancer();
