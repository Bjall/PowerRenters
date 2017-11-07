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
					<li><a href="ajouterclient.php">Ajouter un client</a></li>
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
		<p class= "contenu">Ajouter un client.</p>
		<!-- numero de permis, type de permis, civilite, statut -->
	</div>
	<div class="formulaire">

		<label for="nomclient" class="contenuform"> Ajouter nom:</label><input  type="text" name="nomclient" class="contenuform"/> <br/>

		<label for="prenomclient" class="contenuform">Ajouter un prénom:</label><input type="text" name="prenomclient" class="contenuform"/><br/>

		<label for="datedenaissanceclient" class="contenuform">Ajouter une date de naissance:</label><input type="date" name="datedenaissanceclient" class="contenuform"/><br/>

		<label for="mailclient" class="contenuform">Ajouter une adresse mail:</label><input type="text" name="mailclient" class="contenuform"/><br/>

		<label for="mdpclient" class="contenuform">Ajouter un mot de passe:</label><input type="text" name="mdpclient" class="contenuform"/><br/>

		<label for="typepermisclient" class="contenuform">Ajouter des permis:</label>
		<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A<br/>
		<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A1<br/>
		<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis A2<br/>
		<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis B<br/>
		<input type="radio" name="typepermisclient" value="#" class="contenuform"/>Permis AM<br/><br/>

		<label for="numpermisclient" class="contenuform">Ajouter un numéro de permis:</label><input type="text" name="numpermisclient" class="contenuform"/><br/>

		<label for="civiliteclient" class="contenuform"> Ajouter une civilité:</label>
		<input type="radio" name="civiliteclient" value="#" class="contenuform"/>Monsieur<br/>
		<input type="radio" name="civiliteclient" value="#" class="contenuform"/>Madame<br/>

		<label for="statutclient" class="contenuform"> Ajouter un statut:</label>
		<input  type="radio" name="statutclient" class="contenuform"/>Particulier<br/>
		<input  type="radio" name="statutclient" class="contenuform"/>Professionnel<br/>


		<input type="submit" name="submit" class="soumettre"/><br/>

	</div>
	
</body>

<footer>
	<a href="mentionlegales.php">Mentions legales</a>
	<a href="apropos.php"> A propos</a>
	<a href="FAQ">FAQ</a>
</footer>


</html>