<?php 
//include the header and footer for site.
include("html/footer.html"); 
include("html/header.html"); 
include("html/body.html"); 
?>




<html>  
    <link rel="stylesheet" href="style.css" type="text/css">
     <link rel="header" href="header.html" type="text/css">
    <head>
        <title>Ohminlaskuri</title>
</head>
<body>
    <form action="ohmcalculator.php" method="post">
        R1: <input type="text"  name="R1"> <br>
        R2: <input type="text"  name="R2"> <br>
        R3: <input type="text"  name="R3"> <br>
        <div>
        <input type="submit" value="Send">
        <div>
</form >

<?php
$R1 = $_POST["R1"];
$R2 = $_POST["R2"];
$R3 = $_POST["R3"];
$totalresistanse = 1/((1/$R1) + (1/$R2) + (1/$R3));
echo "Total Resistance: " . $totalresistanse;
?>
</body>
</html>