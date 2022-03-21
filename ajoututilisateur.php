<?php       
        include 'db.php';
        session_start();
           if (isset($_POST["S'inscrire"]))
           {        
                
                $fic ="";
                $fic.=(int)isset($_POST["fic"])? $_POST["fic"] : "";
                $nom = isset($_POST["nom"])? $_POST["nom"] : "";
                $email = isset($_POST["email"])? $_POST["email"] : "";    
                $mdp = isset($_POST["mdp"])? $_POST["mdp"] : ""; 
                $q="SELECT MAX(Id) FROM `utilisateur`";
                $result = mysqli_query($db_handle, $q);
                $data = mysqli_fetch_assoc($result);         
                $id=$data['MAX(Id)']+1;
                $idvendeur= $_SESSION["Id"];
                $sql="INSERT INTO `utilisateur` (`Email`, `Nom`, `Photo`, `Mdp`, `Id`) VALUES ('$email', '$nom', '$fic', '$mdp', '$id')";            
                $result = mysqli_query($db_handle, $sql);
                 
           }

        
                
            ?>