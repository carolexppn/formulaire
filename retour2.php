<!DOCTYPE html>

<html>
    
    
    
<head>

    
       <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Open+Sans+Condensed:300" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">       
        <meta charset="utf-8" />
    
</head>
    

<body>
<br>
        <div style="height:250px"></div>

        
            
            
    <h1>Bonjour <?php echo $_POST['prenom']; ?> !</h1>
    <br>
    
            <h2>Ton pseudo est <?php echo $_POST['pseudo']; ?>. </h2>
            <p>(Si tu veux le changer, <a href="index.php">clique ici</a>.) </p>
        

        <br><br>
        
<?php

try
{
   $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', ''); 
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}

$link = mysqli_connect("localhost", "root", "", "test");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$age = mysqli_real_escape_string($link, $_REQUEST['age']);
$pseudo = mysqli_real_escape_string($link, $_REQUEST['pseudo']);

 
// attempt insert query execution
$sql = "INSERT INTO info (prenom, nom, age, pseudo) VALUES ('$prenom', '$nom', '$age', '$pseudo')";
if(mysqli_query($link, $sql)){
  echo "On peut maintenant commencer !";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

$reponse =  $bdd->query('SELECT * FROM info ORDER BY RAND() LIMIT 1');
while ($donnees = $reponse->fetch()) {
      echo $donnees['prenom'] ;
}

// close connection
mysqli_close($link);
?>
    
    
  <a href="question1.php" class="button">Let's play</a>

    
    </body>
    
</html>