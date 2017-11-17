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
			<p class= "contenu">Liste des Acccessoires</p>
			<table>
				<tr>
					<th>Nom</th>
					<th>Prix</th>
				</tr>
				<?php
					$script = '';
					foreach ($listeAcc as $acc) {
						
						$script .= '<tr>';
						$script .= '<td>'.$acc->getAccessoire_libelle(). '</td>';
						$script .= '<td>'.$acc->getAccessoire_prix_u_ht(). '</td>';
						$script .= '</tr>';
					}
					print($script);
				?>
			</table>
		</div>
	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="FAQ">FAQ</a>
	</footer>
</html>