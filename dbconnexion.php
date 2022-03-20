<div class=profil>

<?php
    if (isset($_POST["connecter"]))
	{   
		
        $_SESSION['Email']=""; 
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
	
			if ($email =="user"){
				if ($password =="user") {
					echo "user is connected";
					$_SESSION['Etat']=0;
				}      
			}
			switch($choice)
				{
						case 1:
						$sql= "SELECT Nom, Id, Mdp, Photo, Idfavori FROM utilisateur WHERE Email = '$email' AND Mdp='$password' ";			
						$result = mysqli_query($db_handle, $sql);
						$data = mysqli_fetch_assoc($result);
						if(!empty($data))
						{			
                            $_SESSION['Email']=$email; 
                            $_SESSION['Id']=$data['Id']; 
                            $_SESSION['Nom']=$data['Nom'];
                            $_SESSION['Photo']=$data['Photo'];
							$_SESSION['Idfavori']=$data['Idfavori'];
							$_SESSION['Etat']=2;

							$Favori = $_SESSION['Idfavori'];
							

                            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Votre email est " .$_SESSION['Email']."<br>";
                            echo "Votre nom est " .$_SESSION['Nom']."<br>";
                            echo "Votre Id est " .$_SESSION['Id']."<br>";
					
							$sql= " SELECT Idregions FROM favori WHERE Idfavori = '$Favori' ";			
							$result = mysqli_query($db_handle, $sql);
							if(!empty($result))
							{
								while($data = mysqli_fetch_assoc($result))
								{
									$Regions=$data['Idregions'];
									$q= "SELECT Nom FROM regions WHERE Id ='$Regions' ";
									$resultat = mysqli_query($db_handle, $q);
									$nom = mysqli_fetch_assoc($resultat);
									echo "un(e) " . $nom['Nom'] ." est dans votre favori<br>";
								}
							
							}
							if(empty($result)){
								echo "Vous n'avez rien dans votre onglet favori";
							}
								                           
                    
                        }
                                                                       
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