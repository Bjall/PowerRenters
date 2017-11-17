<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

			<label for="ttnom">Numéro contrat: </label>
		<form action="/PowerRenters/controllers/adminController.php" method="GET">
			<input type="hidden" name="option" value="chercherContrat">
			<input type="text" name="contratnumero"/>
			<input type="submit" name="submit"/>	
		</form>
		<div>

			<?php
			/*$num=$_POST['num'];
			print($num);*/


			/*
			$contratRecherche = isset ($contratRecherche) ? $contratRecherche : NULL;
				if ($contratRecherche!=null) {
					echo'
							<table class="tablocli">
								<tr><td>Contrat numéro</td>
								<td>Contrat date réservation</td>
								<td>Contrat date début</td>
								<td>Contrat date fin</td>
								</tr>';
					$script = '';
						
								$script .='<tr>';
								$script .='<td>'.$contratRecherche->getContrat_id().'</td>';
								$script .='<td>'.$contratRecherche->getContrat_date_reservation().'</td>';
								$script .='<td>'.$contratRecherche->getContrat_date_debut().'</td>';
								$script .='<td>'.$contratRecherche->getContrat_date_fin().'</td>';

							print($script);
					echo'</table>';
			}
			*/
			?>

		</div>
	</body>
</html>