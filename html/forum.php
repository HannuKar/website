


<?php 
//include the navbar site.
include("html/navbar.html"); 
?>


<html>  
    <head>
        <style>
            
input[type=text], select {

width: 15%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid rgb(0, 0, 0);
border-radius: 4px;
box-sizing: border-box;
}

input[type=submit]{
width: 10%;
background-color: rgb(150, 150, 150);
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover{
background-color: rgb(200, 200, 200);
}
            </style>
        <title>Forums</title>  
        
    </head>
    
    <body>

        <form action="forum.php" method="post">
            Username: <input type="text"  name="Username"> <br>
            <textarea id="text"  name="ForumText" rows="10" cols="37"></textarea><br>
            <input type="submit" name = "submit" value="Send">
            <input type="submit" name = "clear" value="Clear">
        </form >


<?php 


$Username = $_POST["Username"];
$Text = $_POST["ForumText"];


if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['clear']) && $Username == "Hanzki")
    {
        file_put_contents("test.txt", "");
    }
    else if (strlen($_POST['Username']))
    {
      
        file_put_contents("test.txt",date("H:i:s ") . strip_tags($Username) . ": ". strip_tags($Text) . "<br>", FILE_APPEND);
    }
   
}

echo file_get_contents("test.txt");

?>

</body>
</html>