<!DOCTYPE html>
<html>
	<header>
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/styleback.css"> 
		<meta charset="UTF-8">
	</header>

	<body>
		<nav class="bandeauadmin"> 
			<img src="/PowerRenters/images/logopower.png" class="logopower">
			<ul>
				<li>
					<a href="/PowerRenters/controllers/adminController.php?option=accueil">Accueil administrateur</a>
				</li>
				
				<li>
					<a href="#">Clientèle</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=listeClient">Afficher la liste des clients</a>					
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=ajoutClient">Ajouter un client</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Contrat</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=rechercheContratNum">Rechercher un contrat par numéro</a>						
						</li>
						
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=AfficherContrat">Afficher la liste des contrats</a>						
						</li>
						
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=editContrat">Editer un contrat</a>
						</li>
						
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=creerContrat">Créer un contrat</a>
						</li>
						

					</ul>
				</li>

				<li>
					<a href="#">Véhicules</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=rechercheVehMar">Rechercher un véhicule par marque</a>
						</li>
					
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=ListeVehicule">Afficher la liste des véhicules</a>
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=Ajouterunvehicule">Ajouter un véhicule</a>				
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Personnel</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=RechercheMembreNom">Rechercher un membre par nom</a>	
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=ListePersonnel">Afficher la liste du personnel</a>
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminController.php?option=AjoutMembre">Ajouter un membre</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Accessoire</a>
					<ul>
						 <li>
						 	<a href="/PowerRenters/controllers/adminController.php?option=RechercheAccessoire">Rechercher un accessoire</a>
						 </li>
	                    
	                    <li>
	                    	<a href="/PowerRenters/controllers/adminController.php?option=AfficheAccessoire">Afficher la liste des accessoires</a>
	                    </li>
	                    <li>
	                    	<a href="/PowerRenters/controllers/adminController.php?option=AjouterAccessoire">Ajouter un accessoire</a>                	
	                    </li>
					</ul>
				</li>

				<li>
					<a href="/PowerRenters/controllers/adminController.php?option=Statistiques">Statistiques</a>
				</li>
				<li>
					<a href="#">Déconnexion</a>
				</li>
			</ul>
		</nav>
	</body>
</html>