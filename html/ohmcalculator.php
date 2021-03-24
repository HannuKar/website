<?php 
//include the header and footer for site.
include("html/navbar.html"); 

?>

<html>  
    <head>
        <title>Ohminlaskuri</title>  
</head>
<body>


<div>

<form action="ohmcalculator.php" method="post">
<img src="Images/resist.png" alt="resist" style="float:right;width:242px;height:242px;">
        R1: <input type="text"  name="R1"> <br>
        R2: <input type="text"  name="R2"> <br>
        R3: <input type="text"  name="R3"> <br> 
       
        <input type="submit" value="Send">
</form >


<?php
$R1 = $_POST["R1"];
$R2 = $_POST["R2"];
$R3 = $_POST["R3"];
$totalresistanse = 1/((1/$R1) + (1/$R2) + (1/$R3));
echo "Total Resistance: " . $totalresistanse;
?>
<div>



</body>
</html>