<?php

class Article
{
	//Attributs
	public $titre = "J'aime les objets";
	public $auteur = "Moussa Camara";
	public $resume = "Ceci est un test";

	//CONSTANTE
	const NBRE_PAGE = 200;

	//Methodes
	public function lire()
	{
		echo "Je lis des livres";
	}

}

$webforce = new Article();
