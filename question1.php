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
    <p>Question n°1 :</p>
    <h1> Lequel de ces élèves n'a pas eu un seul zéro au semestre 1 ?</h1>

    <a href="#"><img class="vue" src="image/q1_i1.jpg"></a>
    <a href="#"><img class="vue" src="image/q1_i2.jpg"></a>
    <a href="#"><img class="vue" src="image/q1_i3.jpg"></a>



    
<!--
<?php

$sql = "INSERT INTO `info`(`id`, `prenom`, `nom`, `age`, 'pseudo') VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])";

?>
    
-->
    
    </body>
    
    
    </html>