<?php
require_once '../Controleur/controleur_Admin.php';
$listeClient = isset ($listeClient) ? $listeClient : NULL;
	if ($listeClient!=null) {
				echo'<h2>Liste de client</h2>
				<table>
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
					foreach($listeClient as $client){
						echo'<tr>';
						foreach ($client as $information){						
						
					echo'					
						<td>'.$information.'</td>';	
						}echo'</tr>';
					}
					echo '</table>';
	}
?>