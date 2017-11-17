<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

		<div>
			<p class= "contenu">Liste des clients</p>

			<?php
				$listeClient = isset ($listeClient) ? $listeClient : NULL;
				
				if ($listeClient!=null) {
					echo'<h2>Liste de client</h2>
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

					for ($i=0;$i<count($listeClient);$i++) {
						$script .= '<tr>';
						$script .= '<td>'.$listeClient[$i]->getCli_nom().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_prenom().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_date_naissance().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_permis_numero().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_mail().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_civ_denomination().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_stat_libelle().'</td>';
						$script .= '<td>'.$listeClient[$i]->getCli_permis_numero().'</td>';
						$script .= '<td>'.$listeClient[$i]->getAdresse_l1().'</td>';
					}

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