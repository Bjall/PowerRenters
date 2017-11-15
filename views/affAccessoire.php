<table>
	<tr>
		<th>Libelle</th>
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