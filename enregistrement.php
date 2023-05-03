<?php
    $username= $_POST['nom'];
    $name=$_POST['prenom'];
    $birthday=$_POST['date_de_naissance'];

    require'connexion.php';
    $requete="INSERT INTO `simplonnien`(nom, prénom, date_naissance) VALUES('$username','$name','$birthday')";
    $query=mysqli_query($conn,$requete);
    if(isset($query)){
        echo "<p>Inserion reussi</p>";
    }
    else{
        echo "<p>Erreur d'insertion</p>";
    }
?>