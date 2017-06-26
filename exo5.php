<!DOCTYPE html>

<html>

<head>

	<title>challenge php</title>

</head>

<body>

	

	<p>

<h2> Exercice 1 </h2> <br><br>



Un algo pour créer un tableau associatif à partir de deux autres tableaux. <br><br>



Tableau formateurs :<br>

$cuissons : ["à point", "saignant", "bleu", "bien cuit"]; $viandes : ["poulet", "boeuf", "mouton"];<br><br>



Exemple de rendu :<br>

$commandes : ["poulet à point", "poulet saignant", "poulet bleu", etc... ]<br><br>



</p>



	<p>

	<h2>voici le résulat</h2>



		<pre>

<?php



$viandes =  ["poulet", "boeuf", "mouton"]; //valeurs viandes

$cuisson = ["à point", "saignant", "bleu", "bien cuit"]; // valeurs cuisson



$commande = []; // creation de tableau vide carte







for ($i=0; $i < count($viandes) ; $i++) { 		// pour chaque elements viandes la boucle parcours 

	# code...

	for ($n=0; $n < count($cuisson) ; $n++) { 		//  pour chaque elements cuisson la boucle parcours 

		# code...	

			array_push ($commande, $viandes[$i] ." ". $cuisson[$n]); // remplissage du tableau commande avec les elements.



	};



};

	

	 print_r ($commande); //affiche le tableau commande



?>



		</pre>

	</p>



	<p>

	<h2>Exercice 2</h2>



Un algo pour transformer une chaine de caractères en tableau<br><br>



Phrase formateurs :<br>

$genres : "horreur fantastique action western thriller comédie drame romance historique";<br><br>



Exemple de rendu :<br>

$tags : ["horreur", "fantastique", "action", "western", etc...]<br><br>

	</p>



	

	<p>
		<pre>
		<h2>voici le résulat</h2>
			<?php


			$keywords = preg_split("/[\s,]+/", "horreur fantastique action western thriller comédie drame romance historique");

			print_r($keywords);

			?>

		</pre>
	</p>

	<h2>Exercice 3</h2>
	<p>
		<pre>

		<h2>voici le résulat</h2><br><br>
			<?php
			$favo="mes fruits favoris sont:";
			$tableaufruits = [ "orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"]; // valeurs
			$fruits_favoris = [];

			array_push ($fruits_favoris, end($tableaufruits) , prev($tableaufruits));
			echo $favo;
			?>

			<?php
			print_r  ($fruits_favoris);

			?>

		</pre>
	</p>
	
	<p>
		<pre>
			<?php
			$tabnom = [ "Harry", "Hilary", "Harrington", "Hagrid", "Holmes"]; // valeurs
			print_r ($tabnom);
			?>
			<br />
			<?php
			$elements=count($tableaufruits, COUNT_RECURSIVE); //
			// count récursif
			$milieu = $elements / 2;
			$result=ceil($milieu);
			unset ($tabnom[$milieu]);
			print_r ($tabnom);
			?>
		</pre>
	</p>




	


</body>

</html>