<div class=compte>

<?php
    if (isset($_POST["connecter"]))
	{   
		
        $_SESSION['Email']=""; 
        $_SESSION['Prenom']="";
        $_SESSION['Adresse']="";
        $_SESSION['Id']=0; 
        $_SESSION['Nom']="";
		$email = isset($_POST["email"])? $_POST["email"] : "";
		$password = isset($_POST["password"])? $_POST["password"] : "";
		$choice = isset($_POST["choice"])? $_POST["choice"] : "";
		
		if (empty($choice)) {
			$choice = 0;
			}
			$choice = (int)$choice;
			//si le BDD existe, faire le traitement
		if ($db_found) {
	
			if ($email =="admin"){
				if ($password =="admin") {
					echo "admin connected";
					$_SESSION['Etat']=0;
				}      
			}
			switch($choice)
				{
					case 2:                 
						$sql= "SELECT Nom, Id, Adresse, Mdp, Prenom, Photo, IdPanier FROM acheteur WHERE Email = '$email' AND Mdp='$password' ";			
						$result = mysqli_query($db_handle, $sql);
						$data = mysqli_fetch_assoc($result);
						if(!empty($data))
						{			
                            $_SESSION['Email']=$email; 
                            $_SESSION['Prenom']=$data['Prenom'];
                            $_SESSION['Adresse']=$data['Adresse'];
                            $_SESSION['Id']=$data['Id']; 
                            $_SESSION['Nom']=$data['Nom'];
                            $_SESSION['Photo']=$data['Photo'];
							$_SESSION['IdPanier']=$data['IdPanier'];
							$_SESSION['Etat']=2;

							$Panier = $_SESSION['IdPanier'];
							
							
					
                            echo "Connexion réussie " .$_SESSION['Prenom'] .", vous pouvez changer de compte ci-dessous";
                            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Votre email est " .$_SESSION['Email']."<br>";
                            echo "Votre prénom est " .$_SESSION['Prenom']."<br>";
                            echo "Votre nom est " .$_SESSION['Nom']."<br>";
                            echo "Votre Id est " .$_SESSION['Id']."<br>";
                            echo "Votre adresse est " .$_SESSION['Adresse']."<br>";	
					
							$sql= " SELECT IdArticle FROM panier WHERE IdPanier = '$Panier' ";			
							$result = mysqli_query($db_handle, $sql);
							if(!empty($result))
							{
								while($data = mysqli_fetch_assoc($result))
								{
									$Article=$data['IdArticle'];
									$q= "SELECT Nom FROM article WHERE Id ='$Article' ";
									$resultat = mysqli_query($db_handle, $q);
									$nom = mysqli_fetch_assoc($resultat);
									echo "un(e) " . $nom['Nom'] ." est dans votre panier<br>";
								}
							
							}
							if(empty($result)){
								echo "Vous n'avez rien dans votre panier";
							}
								                           
                    
                        }
                                                                       
							else{
								echo "utilisateur non trouvé";
							}                 
						break;
					
					case 1:
						$sql= "SELECT Pseudo, Nom, Id, Photo FROM vendeur WHERE Email = '$email' AND Mdp='$password' ";			
						$result = mysqli_query($db_handle, $sql);
						$data = mysqli_fetch_assoc($result);
						if(!empty($data)){
							
                            $_SESSION['Email']=$email; 
                            $_SESSION['Pseudo']=$data['Pseudo'];          
                            $_SESSION['Id']=$data['Id']; 
                            $_SESSION['Nom']=$data['Nom']; 
							$_SESSION['Photo']=$data['Photo']; 
							$_SESSION['Etat']=1;               
                            echo "Connexion réussie " .$_SESSION['Pseudo'] .", vous pouvez changer de compte ci-dessous"; 		
                            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Votre email est " .$_SESSION['Email']."<br>";
                            echo "Votre pseudo est " .$_SESSION['Pseudo']."<br>";
                            echo "Votre nom est " .$_SESSION['Nom']."<br>";
                            echo "Votre Id est " .$_SESSION['Id']."<br>";
							echo "<img src=".$_SESSION['Photo'].">";}
						
                 
							else{
								echo "utilisateur non trouvé";
							}   
						break;

					default: 
						break;
				}

		}//end if
		
		//si le BDD n'existe pas
		else {
			echo "Database not found";
			}//end else
		} 
		
		?>

	</div>