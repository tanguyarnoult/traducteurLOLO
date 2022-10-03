<?php
    if(isset($_POST["javaText"])){
        $java = $_POST["javaText"];
        $lolo = traductionLolo($java);
    } else {
        $lolo = "";
        $java = "";
    }

    function traductionLolo($codeJava){
        $traduction = str_replace("Class", "Classe", $codeJava);  // Ajoute un e à Class
        $traduction = str_replace("class", "Classe", $traduction);

        $traduction = str_replace("{", "", $traduction); // Retire les {}
        $traduction = str_replace("}", "", $traduction);

        $traduction = str_replace(";", "", $traduction); // Retire les ;
        
        $traduction = str_replace("int *", "", $traduction); // Retire les ;

        return $traduction;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traducteur Java / Lolo</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
    <h1>Traducteur Java / <span class="gold">Lolo</span> </h1>
    <form action="index.php" method="post">
        <div class="traducteur">
            

            
            <div class="java">
                <textarea class="javaText" name="javaText" id="javaText" cols="89" rows="31.9"><?php echo $java?></textarea>
            </div>
            <div class="lolo">
                <textarea class="loloText" name="loloText" id="loloText" cols="89" rows="31.9"><?php echo $lolo?></textarea>
            </div>
        </div>
        <div class="boutons">
            <button type="confirm" class="confirmer">Traduire</button>
            <a href="/trad_JavaLolo"><button type="button" class="reset" id="reset">Reset</button></a>
        </div>
    </form>
    <script src="js/app.js"></script>
</body>
</html>