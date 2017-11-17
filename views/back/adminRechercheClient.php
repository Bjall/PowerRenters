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
			<?php
				$faireplaisiranathalie = isset ($faireplaisiranathalie) ? $faireplaisiranathalie : NULL;
				if ($faireplaisiranathalie!=null) {
					echo'<table class="tablocli">
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