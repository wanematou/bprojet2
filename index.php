<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style\style.css">
    
</head>
<body>
  
        <form action="enregistrement.php" method="post">
            <section class="s1" >
                <label for="nom"><p>Nom</p></label>
                <input type="text" id="nom" name="nom" required>
                <label for="prenom"><p> Prenom</p></label>
                <input type="text" id="prenom" name="prenom" required >
                <label for="date_de_naissance"><p>Date de naissance</p></label>
                <input type="date" id="date_de_naissance" name="date_de_naissance" required>
                <input type="submit" value="enregistrer">
            </section>
        </form>
 

</body>
</html>