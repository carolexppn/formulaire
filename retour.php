<!DOCTYPE html>

<?php  
require_once('database.php'); 

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_BASE); 
$sql = "SELECT * FROM test"; 
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_array($result);
echo $res[2];
mysqli_close($conn); 

?>


<html>

    <head>
        
     <link rel="stylesheet" type="text/css" href="style.css">       
        <meta charset="utf-8" />
  
    </head>
    
    <body>
        
   <p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom']; ?> !</p>

    </body>
    
</html>