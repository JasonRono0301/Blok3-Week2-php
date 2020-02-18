<?php
    //De GET en POST variabeles voor het formulier
    $_GET["name"];
    $_GET["email"];    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Lab1/welcome.html">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
    
</body>
</html>