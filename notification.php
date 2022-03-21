<?php
    $_SESSION['Etat']=2;
    $_SESSION['Nom']='';
    $_SESSION['Id']=1;
    $id=1;

    include 'db.php';

    if($_SESSION['Etat']==2)
    {   
        echo "<br>bienvenue dans votre espace notification " .$_SESSION['Nom']."<br>";
        $sql= " SELECT Idregions FROM notification WHERE Idutilisateur = '$id' ";			
        $result = mysqli_query($db_handle, $sql);
        if(!empty($result))
        {  
            while($data = mysqli_fetch_assoc($result))
            {
                $Article=$data['Idregions'];
                $q= "SELECT Nom FROM regions WHERE Id ='$Regions' ";
                $resultat = mysqli_query($db_handle, $q);
                $nom = mysqli_fetch_assoc($resultat);
                echo "un(e) " . $nom['Nom'] ." vous interesse<br>";
            }
        
        }
        else{
            echo "Vous n'avez pas de notifications";
        }

        
        


    }
   
    else{
        echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>Connectez-vous avant de pouvoir consulter vos notifications';
        echo $_SESSION['Etat'];
    }
     
?>