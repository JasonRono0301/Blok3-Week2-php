<!DOCTYPE html>
<html lang="en">
<head>
<style>
.error {color: #FF0000;}
</style>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>
<body>
<?php
    //Variabele van de naam en email + de error.
    $naam = "";
    $email = "";
    $nameErr = "";
    $emailErr = "";
   
    //Het controleren van de gegevens.
    if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["naam"])){
            $nameErr = "Naam veriest";
    } else {
            $naam = test($_POST["naam"]);
        }
        //Controleert of de naam alleen uit letters en spaties bestaat.
    if(!preg_match("/^[a-zA-Z ]*$/",$naam)){
            $nameErr = "Alleen letters of spaties";
        } 
    }

    if(empty($_POST["email"])){
        $emailErr = "Email vereist";
    } else {
        $email = test($_POST["email"]);
        //Check of de email wel geldig is.
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Ongeldige email";
        }
    }

    
    


    function test($test1){
        $test1= trim($test1);
        $test1= stripcslashes($test1);
        $test1= htmlspecialchars($test1);
        return $test1;
    }
?>

   <h1>De ingevulde gegevens</h1>
   <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Naam: <input type="text" name="naam"><span class="error"> * <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email"><span class="error"> * <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" name="submit">





<?php
    echo "<h1>Jou antwoord:</h2>";
    echo $naam;
    echo "<br>" . "<br>";
    echo $email;

?>
</body>
</html>

