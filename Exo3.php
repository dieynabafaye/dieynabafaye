<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice3</title>
</head>
<body style="text-align: center;">
    <form method="post" action="">
        <input type="text" name="nbr_input" style="width: 12%; height: 28px; border-radius: 3px;" value="<?php if(isset($_POST["nbr_input"])){ echo $_POST['nbr_input'];}?>"><br><br>
        <input type="submit" value="Valider" name="envoie" style="height: 30px; border-radius: 5px; background-color: blue; color: white;">
        <input type="submit" value="Annuler" name="annuler" style="height: 30px; border-radius: 5px; background-color: red; color: white;">
    </form>

    <?php
        
        require_once('fonctionexo3.php');
        if(isset($_POST['envoie']))
        {
            $tab_input=[];
            $nbr_input = $_POST['nbr_input'];
            if (!empty($nbr_input))
            {
                
                if(numeric($nbr_input) == false)
                {

                    echo "<form method='post'>";
                    echo "<input type='hidden' name='nbr' value='$nbr_input'>";

                    for ($i=1; $i <= $nbr_input ; $i++)
                    {?>
                        <label for="mot" style="margin-right: 40%;">Mot N°<?=$i?></label>
                        <br><input type="text" name="mot<?php echo $i;?>" value="<?php if(isset($_POST['mot'][$i])){echo $_POST['mot'][$i];} ?>" style="width: 45%; height: 28px; border-radius: 3px;"><br>
                        
                       <?php
                    }
                    echo "<input type='hidden' name='nbr' value='$nbr_input'>";
                    echo '<br><input type="submit" value="Resultat" name="valider" style="width: 12%; height: 30px; border-radius: 5px; background-color: green; color: white;">';
                    echo "</form>";
                }
                else
                {
                    echo "Veuillez saisir  un entier!";
                }

            }
            else
            {
                echo  "Veuillez saisir  d'abord!";
            }
                        

        }
        if(isset($erreurs))
        {
         echo "<p style='color:red'>".$erreurs."</p>";
        } 
        

       
        if(isset($_POST['valider'])){?>
            <?php
            $cpt = 0;

            for($i=1; $i<=$_POST['nbr']; $i++)
            {
                
                if(is_valide($_POST["mot$i"]))
                {
                    if(my_strlen($_POST["mot$i"])<=20)
                    {

                        if(lettreM($_POST["mot$i"])){
                            echo "Mot $i : ".$_POST["mot$i"].' <br> ';
                            $cpt++;
                        }
                    }
                    else
                    {
                        echo "ce mot $i ne doit pas dépasser 20 caractères<br>";
                    }
                }
                else
                {
                    echo "Le mot doit être valide<br>";
                }
            }
            echo "<br><p style='background-color: grey; width: 50%;  font-size: 22px; margin-left: 25%; padding: 16px;'>vous avez saisi $i mot(s) dont $cpt contient la lettre M</p>";
           
            
            
              
           

        }
         
    ?>



    <?php
        
    ?>
</body>
</html>