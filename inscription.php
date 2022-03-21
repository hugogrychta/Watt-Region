<html>

<head>
	<title>WattRegion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" type="image/png" sizes="50x50" href="logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="wattregion.js"></script>
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
				<li><button class="boutonnav" onclick="changetab(0)">Accueil</button></li>
				<li><button class="boutonnav" onclick="changetab(1)">Tout Parcourir</button></li>
				<li><button class="boutonnav" onclick="changetab(2)">Notifications</button></li>
				<li><button class="boutonnav" onclick="changetab(4)">Votre compte</button></li>
			</ul>
			
		</div>

		<div class="section" id="compte">
			<h3>Votre compte</h3>

<form  action="inscription.php" method="post">
				<table>
					
					<tr>
                            <td>Photo:</td>
                            <td><input type="hidden" name="MAX_FILE_SIZE" value="250000" />
							<input type="file" name="fic" size=50 /></td>
					</tr>
					<tr>
						<td>Nom</td>
						<td><input type="text" name="nom" required></td>
					</tr>

					<tr>
						<td>Email</td>
						<td><input type="text" name="email" required></td>
					</tr>

					<tr>
						<td>Mdp</td>
						<td><input type="text" name="mdp" required></td>
					</tr>
					
					
					<tr>
						<td colspan="2">
							<input type="submit" value="S'inscrire" name="S'inscrire">
						</td>
						
					</tr>
				</table>
			</form>
		</div>
	</div>

        
</html>


