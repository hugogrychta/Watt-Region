<!DOCTYPE html>
<html>

<head>
	<title>WattRegion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" type="image/png" sizes="16x16" href="logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<style type="text/css">
		#footer {
			background-color: black;
			width: 1200px;
			height: 100px;
			margin: 0 auto 0 auto;
			position: absolute;
			font-size: .90em;
			font-style: italic;
			color: white;
			text-align: center;
		}
	</style>
	
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
				<li><button class="boutonnav" onclick="changetab(4)"><a href="connexion.php">Votre compte</a></button></li>
			</ul>
		</div>
		<div class="section" id="accueil">
			<br>
			<p>Bienvenue sur notre plateforme interactive en ligne WattRegion. <br>
				Sur WattRegion vous pourrez vous informez sur la consommation en électricté de chaque région de France en temps et en heure.
			Les détails du fonctionnement de la plateforme est disponible dans les mentions légales.</p><br>
			<h3>Remplir le formulaire de connexion</h3>
			<div id="region">
				<form  method="post">
					<table>
						<tr>
							<td>E-Mail:</td>
							<td><input type="text" id="email" rows="4"></td>
						</tr>
						<tr>
							<td>Mot De Passe:</td>
							<td><input type="password" id="mdp" rows="4"></td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="Connecter" name="Connecter" onclick="validate()">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<a href="inscription.php"><button name="inscription">Créer un compte</a>
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