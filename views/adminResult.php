<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="../css/adminstyle.css">
	<title>Administrateur</title>
	<meta charset="UTF-8">
</head>

<body>

	<nav class="bandeauadmin"> 
		<img src="logopower.png" class="logopower">
		<ul>
			<li><a href="administrateur.php">Accueil administrateur</a></li>
			<li>
				<a href="#">Clientèle</a>
				<ul>
					<li><a href="admin_ListeClient.php">Afficher la liste des clients</a></li>
					<li><a href="adminAddCli.php">Ajouter un client</a></li>
				</ul>
			</li>

			<li>
				<a href="#">Contrat</a>
				<ul>
					<li><a href="recherchercontrat.php">Rechercher un contrat par numéro</a></li>
					<li><a href="listecontrat.php">Afficher la liste des contrats</a></li>
					<li><a href="editercontrat.php">Editer un contrat</a></li>
					<li><a href="creercontrat.php">Créer un contrat</a></li>

				</ul>
			</li>

			<li>
				<a href="#">Véhicules</a>
				<ul>
					<li><a href="recherchermodele.php"> Rechercher un véhicule par modèle</a></li>
					<li><a href="recherchemarque.php">Rechercher un véhicule par marque</a></li>
					<li><a href="listevehicule.php">Afficher la liste des véhicules</a></li>
					<li><a href="ajouterbehicule.php">Ajouterun véhicule</a></li>
				</ul>
			</li>

			<li>
				<a href="#">Personnel</a>
				<ul>
					<li><a href="rechercherpersonnel.php">Rechercher un membre par nom</a></li>
					<li><a href="listepersonnel.php">Afficher la liste du personnel</a></li>
					<li><a href="ajoutermembre.php">Ajouter un membre</a></li>
				</ul>
			</li>

			<li>
				<a href="adminstatistique.php">Statistiques</a>
			</li>
			<li>
				<a href="#">Déconnexion</a>
			</li>
		</ul>
	</nav>

	<div>
<?php

$faireplaisiranathalie = isset ($faireplaisiranathalie) ? $faireplaisiranathalie : NULL;
	if ($faireplaisiranathalie!=null) {
				echo'
				<table class="tablocli">
					<tr><td>Nom</td>
					<td>Prénom</td>
					<td>Date de naissance</td>
					<td>Numéro de permis</td>
					<td>Nom</td>
					<td>Téléphone</td>
					<td>Prénom</td>
					<td>Statut</td>
					<td>Adresse</td>
					<td>Adresse complément</td>
					<td>Adresse complément</td>
					<td>Code postal</td>
					<td>Ville</td>
					</tr>';
					$script = '';
					
							
							
							
					$script .= '<tr>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_nom().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_prenom().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_date_naissance().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_permis_numero().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_mail().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_civ_denomination().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_stat_libelle().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getCli_permis_numero().'</td>';
					$script .= '<td>'.$faireplaisiranathalie->getAdresse_l1().'</td>';
							
				
						
					print($script);
					echo '</table>';
	}

?>
	</div>

	
</body>

<footer>
	<a href="mentionlegales.php">Mentions legales</a>
	<a href="apropos.php"> A propos</a>
	<a href="FAQ">FAQ</a>
</footer>


</html>
