<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Veuillez saisir votre nom</h1>
    <form action="functions.php" method="post">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        <br><br>
        <input type="submit" value="Envoyer">
    </form>
<?php

if(isset($_POST['name'])){
    $name = $_POST['name'];
}

// echo($name);
// $str = 'This is going to be shuffled !';
// $str = str_shuffle($str);
// echo $str;

//creation of functions : 

//function Capitalizes : 

function Capitalizes($name){ //fonctionne :)
    $capitalizes = ucfirst($name);
    // echo($capitalizes);

    return $capitalizes;
}

function dateTime(){

    $date_now = date('Y-m-d H:i:s');
}
// echo("Le nom changé = ".Capitalizes($name));


?>
</body>
</html>