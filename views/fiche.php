<!DOCTYPE html>
<html>
<head>
	<title>Power Renters</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>

	<link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Slabo+27px" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body>
	<nav id="menuhaut">	
		<ul>
		<li><a href="index.php" title="Page d'accueil">Accueil</a></li>
		<li><a href="liste.php" title="Page liste">Agences</a></li>
		<li><a href="liste_voitures.php" title="Page formulaire">Voitures</a></li>
		<li><a href="fiche.php" title="Page formulaire">Utilitaires</a></li>
		<li><a href="fiche.php" title="Page formulaire">Motos</a></li>
		<li><a href="fiche.php" title="Page formulaire">Vélos</a></li>
		<li><a href="fiche.php" title="Page formulaire">Professionnels</a></li>
		<li><a href="creationCompte.php" title="Page formulaire">Votre compte</a></li>
	</ul>
	</nav>
		<div id="bandeau">
			<ul class="listeb">
<li><img src="mesimages/logonegatif.png" alt="image article" class="logo"/></li>
<li id="sloganone">Louez votre prochaine aventure</li>
	<li><p id="slogan">Power Renters</p></li>
</ul>
</div>
	
	<section class="container">
		<div class="firstpart">
		<!-- <img src="mesimages/bluecar.jpg" alt="voiture" class="car"/> -->

<form method="get" action="" class="myform">
<!--
get: voir toutes les donnees dans url<br/>
post: info dans la requete http</p> type input: text zone monoligne, password petit point, radio selection, checkbox case a cocher plusieurs, (date, email, phone, number) pres formatage. <text area> sur la meme ligne zone de texte-->

<label class="formtitre">Date de début:</label>
<input type="date" class="formfirstinput" id="calendarone"/>
<input type="time" class="formfirstinput" id="calendarone"/>
<label class="formtitre">Date de fin:</label>
<input type="date" class="formfirstinput" id="calendartwo"/>
<input type="time" class="formfirstinput" id="calendarone"/>
<label class="formtitre">Ville:</label>
<input type="text" class="formfirstinput""/></br>
<label class="formtitre">Choisissez votre véhicule:</label></br>

<div class="radiolist">

<div class="radiolistcol">	
<div class="radiolistitem">
<input type="radio"/>
<img src="mesimages/car.svg" class="icone"/>
<label class="">Voitures</label>
</div>

<div class="radiolistitem">
<input type="radio"/>
<img src="mesimages/van.svg" class="icone"/>
<label class="">Utilitaires</label>
</div>
</div>

<div class="radiolistcol">
<div class="radiolistitem">
<input type="radio"/>
<img src="mesimages/motorbike.svg" class="icone"/>
<label class="">Motos</label>
</div>

<div class="radiolistitem">
<input type="radio"/>
<img src="mesimages/bicycle.svg" class="icone"/>
<label class="">Vélos</label>
</div>
</div>

</div>
<!-- <select name="cbJours">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">1</option>
<option value="4">2</option>
<option value="5">1</option>
<option value="6">2</option>
<option value="7">1</option>
<option value="8">2</option>
<option value="9">2</option>
<option value="10">1</option>
<option value="11">2</option>
<option value="12">1</option>
<option value="13">2</option>
<option value="14">1</option>
<option value="15">2</option>
<option value="16">2</option>
<option value="17">1</option>
<option value="18">2</option>
<option value="19">1</option>
<option value="20">2</option>
<option value="21">1</option>
<option value="22">2</option>
<option value="23">2</option>
<option value="24">1</option>
<option value="25">2</option>
<option value="26">1</option>
<option value="27">2</option>
<option value="28">1</option>
<option value="29">2</option>
<option value="30">2</option>
<option value="31">1</option>
</select>
<select name="cbMois">
<option value="Janvier">Janvier</option>
<option value="Février">Février</option>
<option value="Mars">Mars</option>
<option value="Avril">Avril</option>
<option value="Mai">Mai</option>
<option value="Juin">Juin</option>
<option value="Juillet">Juillet</option>
<option value="Aout">Aout</option>
<option value="Septembre">Septembre</option>
<option value="Octobre">Octobre</option>
<option value="Novembre">Novembre</option>
<option value="Décembre">Décembre</option>
</select>
<select name="cbAnnées">
<option value="1">2017</option>
<option value="	2017	" >	2017	</option>
<option value="	2016	" >	2016	</option>
<option value="	2015	" >	2015	</option>
<option value="	2014	" >	2014	</option>
<option value="	2013	" >	2013	</option>
<option value="	2012	" >	2012	</option>
<option value="	2011	" >	2011	</option>
<option value="	2010	" >	2010	</option>
<option value="	2009	" >	2009	</option>
<option value="	2008	" >	2008	</option>
<option value="	2007	" >	2007	</option>
<option value="	2006	" >	2006	</option>
<option value="	2005	" >	2005	</option>
<option value="	2004	" >	2004	</option>
<option value="	2003	" >	2003	</option>
<option value="	2002	" >	2002	</option>
<option value="	2001	" >	2001	</option>
<option value="	2000	" >	2000	</option>
<option value="	1999	" >	1999	</option>
<option value="	1998	" >	1998	</option>
<option value="	1997	" >	1997	</option>
<option value="	1996	" >	1996	</option>
<option value="	1995	" >	1995	</option>
<option value="	1994	" >	1994	</option>
<option value="	1993	" >	1993	</option>
<option value="	1992	" >	1992	</option>
<option value="	1991	" >	1991	</option>
<option value="	1990	" >	1990	</option>
<option value="	1989	" >	1989	</option>
<option value="	1988	" >	1988	</option>
<option value="	1987	" >	1987	</option>
<option value="	1986	" >	1986	</option>
<option value="	1985	" >	1985	</option>
<option value="	1984	" >	1984	</option>
<option value="	1983	" >	1983	</option>
<option value="	1982	" >	1982	</option>
<option value="	1981	" >	1981	</option>
<option value="	1980	" >	1980	</option>
<option value="	1979	" >	1979	</option>
<option value="	1978	" >	1978	</option>
<option value="	1977	" >	1977	</option>
<option value="	1976	" >	1976	</option>
<option value="	1975	" >	1975	</option>
<option value="	1974	" >	1974	</option>
<option value="	1973	" >	1973	</option>
<option value="	1972	" >	1972	</option>
<option value="	1971	" >	1971	</option>
<option value="	1970	" >	1970	</option>
</select> -->
<div class="validation">
<input type="submit" class="ok">
</div>
</form>

	</div>

</section>
<footer class="footer">Ecrit le  octobre</footer>
</body>
</html>