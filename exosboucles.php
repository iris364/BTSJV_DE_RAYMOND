<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php


	/*
	Ecrire en algo puis en langage C et PHP un programme 
	qui affiche les nombres pairs compris 
	entre 2 et 20 à l’aide d’une boucle POUR/FOR 
	par pas de 1

	algo : nbrepairs

	declaration

	nb : entiers

	debut
	
		pour nb allant de 2 à 20 pas 1 faire

			si nb mod 2 = 0 alors
			afficher(nb,"nombre pair : ")
			finsi

		finpour
	
	fin nbrepairs

	*/

	//declaration des variables

	$nb;

	//calcul d'un nombre pair par pas de 1

	for ($nb=2; $nb <= 20; $nb++) { 
		if ($nb % 2 == 0) {
			echo "nombre pair : " . $nb . "<br>";
		}
	}

	/*
	Ecrire un script PHP qui permet de lister les nombres 
	parfaits compris entre deux bornes. 
	Un nombre est dit parfait s'il est egal
	à la somme de ses diviseurs sauf lui même.
	Exemple : 28 parfait car 28 = 1, 2, 4, 7, 14 
	*/

	for ($nb=1; $nb <= 1000 ; $nb=$nb+1) { 
		$test=0;
		for($i=1; $i<$nb; $i = $i+1){
			if($nb % $i == 0){
				$test = $test + $i;
			}
		}
	}

	if($test == $nb){
		echo $nb."est un nombre parfait <br>";
	}

	?>



	<

</body>
</html>