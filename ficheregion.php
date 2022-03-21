<!DOCTYPE html>
<html>

<head>
	<title>WattRegion</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="icon" type="image/png" sizes="50x50" href="logo.png">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="wattregion.js"></script>
	
</head>

<body>
	<div id="wrapper">
		<div id="header">
			
			<h1 style="text-align:center">WattRegion</h1>
			<img src="logo.png" height="50px" width="50px">
			
		</div>
		<div id="navigation">
			<ul>
				<li><a href="WattRegion.php"><button class="boutonnav">Accueil</button></a></li>
				<li><a href="WattRegion.php"><button class="boutonnav" onclick="changetab(1)">Tout Parcourir</button></a></li>
				<li><a href="WattRegion.php"><button class="boutonnav" onclick="changetab(2)">Notifications</button></a></li>
				<li><a href="WattRegion.php"><button class="boutonnav" onclick="changetab(3)">Favori</button></a></li>
				<li><a href="WattRegion.php"><button class="boutonnav" onclick="changetab(4)">Votre compte</button></a></li>

			</ul>
		</div>

		<div class="product">
			<?php 
include 'db.php';
session_start();
	if ($db_found) {
		$produit=$_GET['regions'];
        $sql = "SELECT * FROM regions WHERE Id='$produit'";
        $result = mysqli_query($db_handle, $sql);

       $resultat = mysqli_query($db_handle, $q);
 
 

        echo "<h3>Fiche produit</h3>";
        echo "<table class=\"produit\">";
        while ($data = mysqli_fetch_assoc($result)) {
       	echo "<tr>";
 	    echo "<td>"."<img src=".$data['Image'].">"."</td>";
 	    echo "<td>"."Nom du produit: ".$data['Nom'].'<br>';

	 if(!empty($resultat) && $_SESSION['Id']==0)
	{	
		
		$donnees = mysqli_fetch_assoc($resultat);
		$nomdeutilisateur=$donnees['Idutilisateur'];
		$sq="SELECT Nom FROM utilisateur WHERE Id='$nomdeutilisateur' ";
		$chiche = mysqli_query($db_handle, $sq);
		$don = mysqli_fetch_assoc($chiche);

		
	}


 	$k=$data['Id'];
	$_SESSION['regions']=$k;
	$Idutilisateur = $_SESSION['Id'];


	echo "<form method='post'><input type='submit' value='Ajouter une notification' name= 'favori' </form>"."</td></tr>";

 	}
	
	if($_SESSION['Etat']==2){

		
		$q="INSERT INTO `notification` (`Idutilisateur`, `Idregions`) VALUES ('$Idutilisateur', '$produit') ";
		$result = mysqli_query($db_handle, $q);
	
 	}
	else{
		echo "connectez-vous pour ajouter une notification";
	}
 	
echo "</table>";
}
else {
 echo "Database not found";
}


?>
		</div>
		<div id="footer">
			Copyright &copy; 2021 | ECE |
			<a href="mailto:ecemarketplace@gmail.com">Nous contacter par Email </a> |
			<a href="#"> Adresse postale</a> | <a href="#"> Téléphone</a> | <a href="#"> Mentions légales</a>
		</div>
	</div>
</body>

</html>


