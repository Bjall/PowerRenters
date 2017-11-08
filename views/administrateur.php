<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" type="text/css" href="adminstyle.css">
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
					<li><a href="listeclient.php">Afficher la liste des clients</a></li>
					<li><a href="adminaddcli.php">Ajouter un client</a></li>
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
		<p class= "contenu">Bienvenue, administrateur.</p>
		<p class= "contenu">Accès rapide</p>
	</div>
	<img src="personnes.png" class="imagepersonne">
	<img src="voiture.png" class="imagevoiture">
	<div class="formulaire">
		<label for="numeroclient" class="contenuform">Rechercher un client par numéro:</label><input  type="text" name="numeroclient" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
		<label for="nomclient" class="contenuform">Rechercher un client par nom:</label><input type="text" name="nomclient" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
		<label for="numerovehicule" class="contenuform">Rechercher un véhicule par numéro:</label><input type="text" name="numerovehicule" class="contenuform"/> <input type="submit" name="submit" class="contenuform"/><br/>
	</div>
	
</body>

<footer>
	<a href="mentionlegales.php">Mentions legales</a>
	<a href="apropos.php"> A propos</a>
	<a href="FAQ">FAQ</a>
</footer>


</html>