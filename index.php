<!DOCTYPE html>


<?php  

require_once('database.php'); 

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE); 
$sql = "SELECT * FROM info"; 
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($result);
//echo $res[2];
mysqli_close($conn); 

?>

<html>
    
    
    
<head>

    
       <link href="https://fonts.googleapis.com/css?family=Abel|Josefin+Sans|Open+Sans+Condensed:300" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="style.css">       
        <meta charset="utf-8" />
    
</head>

<body style="margin:7%">

    <br>
<!--      <div style="height:180px"></div>-->
    
    <h1> Hello ! Merci de t'enregistrer pour pouvoir commencer :)</h1>

<form method="post" action="index.php">
Prénom :
<br><br>
<input type="text" name="prenom" />
<br><br>
Nom :
<br><br>
<input type="text"  name="nom" />
<br><br>
Age :
<br><br>
<input type="text" name="age" />
<br><br>
Pseudo :
<br><br>
<input type="text" name="pseudo" />    
<br><br><br>

<input type="submit" value="Envoyer">
</form>


 <h2>Ton pseudo est <?php echo $_POST['pseudo']; ?>.</h2>


    
<?php

$sql = "INSERT INTO `info`(`id`, `prenom`, `nom`, `age`, 'pseudo') VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";

?>
    
    
    </body>
    
    
    </html>