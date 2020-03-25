
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
    <link rel="stylesheet" href="Exo2.css">
</head>
<body>
    <?php
        include('Fonction.php');
    /* déclaration du tableau des mois*/
        $tabMois = array(
            '1' =>array('Janvier', 'January'),
            '2' =>array('Février', 'February'),
            '3' =>array('Mars', 'March'),
            '4' =>array('Avril', 'April'),
            '5' =>array('Mai', 'May'),
            '6' =>array('Juin', 'June'),
            '7' =>array('Juillet', 'July'),
            '8' =>array('Août', 'Agust'),
            '9' =>array('Septembre', 'September'),
            '10' =>array('Octobre', 'October'),
            '11' =>array('Novembre', 'November'),
            '12' =>array('Decmbre', 'December')
        );

        if(isset($_POST['Valider'])){
            $Langues=$_POST['Langues'];
                if($Langues=="Français"){
                    echo "<h4>Français</h4>";
                    $key = 0; // $key 0 représente la clé du tableau des mois en français 
            affichtabMois($tabMois,$key);
                }
                if($Langues=="Anglais"){
                    echo "<h4>Anglais</h4>";
                    $key = 1;  // $key 1 représente la clé du tableau des mois en français    vfv vvvv  
            affichtabMois($tabMois,$key);
                }
        }


    ?>
    <form method="post" action="">
    <br><br><label for="Langue">Veillez choisir une langue:</label>
        <select name="Langues" >
        <option value="Français" style="width: 20%; height: 50px;">Français</option><br><br>
        <option value="Anglais">Anglais</option>
        </select><br><br>
        <input type="submit" name="Valider">
    
    
    </form>
    
</body>
</html>