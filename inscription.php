<!DOCTYPE html>
<html>

<head>
	<title>WattRegion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" type="image/png" sizes="16x16" href="logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	
</head>

<body>
	<div id="wrapper">
		<div id="header">
			
			<h1 style="text-align:center">WattRegion</h1>
			<img src="logo.png" height="50px" width="50px">
			
		</div>
		<div id="navigation">
			<ul>
				<li><button class="boutonnav" onclick="changetab(0)"><a href="WattCountry.php">Accueil</a></button></li>
				<li><button class="boutonnav" onclick="changetab(4)"><a href="inscription.php">Votre compte</a></button></li>
			</ul>
		</div>
		<div class="section" id="accueil">
			<br>
			<p>Bienvenue sur notre plateforme interactive en ligne WattRegion. <br>
				Sur WattRegion vous pourrez vous informez sur la consommation en électricté de chaque région de France en temps et en heure.
			Les détails du fonctionnement de la plateforme est disponible dans les mentions légales.</p><br>
			<h3>Remplir le formulaire d'inscription</h3>
			<div id="region">
				<form action="inscription.php" method="post">
					<table>

						<tr>
							<td>Nom :</td>
							<td><input class="champs" type="text" id="nom" name="nom"></td>
						</tr>
						<tr>
							<td>Prénom :</td>
							<td><input class="champs" type="text" id="prenom" name="prenom"></td>
						</tr>
						<tr>
							<td>E-mail :</td>
							<td><input class="champs" type="text" id="email" name="email"></td>
						</tr>
						<tr>
							<td>Mot de passe :</td>
							<td><input class="champs" type="password" id="mdp" name="mdp"></td>
						</tr>
						<tr>
							<td>N° Téléphone :</td>
							<td><input class="champs" type="number" id="telephone" name="telephone"></td>
						</tr>
						<tr>
							<td>Adresse :</td>
							<td><input class="champs" type="text" id="adresse" name="adresse"></td>
						</tr>
						<tr>
							<td>Ville :</td>
							<td><input class="champs" type="text" id="ville" name="ville"></td>
						</tr>
						<tr>
							<td>Code Postal :</td>
							<td><input class="champs" type="number" id="codepostal" name="codepostal"></td>
						</tr>
						<tr>
							<td><input type="radio" id="accepte"></td>
							<td>J'accepte les conditions de confidentialité :</td>

						</tr>

						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="Valider" name="Valider" onclick="validate()">
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
		<div id="footer">
			Copyright &copy; 2022 | WattRegion |
			<a href="mailto:wattregion@gmail.com">Email </a> |
			<a href="https://www.google.com/maps/place/ECE+Paris+Lyon/@48.8518829,2.286998,15z/data=!4m2!3m1!1s0x0:0x167f5a60fb94aa76?sa=X&ved=2ahUKEwjvqr-k9vTwAhXCyIUKHT4eCzsQ_BIwFHoECEYQBQ"> Adresse postale</a> | <a href="#"> Téléphone</a> | <a href="https://www.ece.fr/ecole-ingenieur/mentions-legales/"> Mentions légales</a>
		</div>
	</div>
</body>

</html>