
	<?php
require_once '../Controllers/controleur_Admin.php';
$listeAccessoire = isset ($listeAccessoire) ? $listeAccessoire : NULL;
	if ($listeAccessoire!=null) {
				echo'<h2>Liste des accesoires</h2>
				<table>

					<tr>
					<td>Nom de l accessoire</td>
					<td>Prix</td>
					</tr>';

					foreach($listeAccessoire as $accessoire){
						echo'<tr>';
						foreach ($accessoire as $information){			
						echo'<td>'.$information.'</td>';	
						}
						echo'</tr>';
					}
					echo '</table>';
	}
?>

