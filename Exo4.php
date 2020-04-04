<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice4</title>
</head>
<body>
    <?php
        function phrase_correction($text)
        {
            preg_match_all('#[A-Za-z]{1}([^.?!]|([.][0-9]))*[.?!]#m',$text,$phrase);
            $i = 0;
            foreach($phrase[0] as $value)
            {
                $value = preg_replace('#\s\s+#'," ",$value); //pour supprimer les espaces de trop 
                $value = preg_replace('#\s+\'#',"'",$value); //pour supprimer les espaces qui sont avant l'apostrophe
                $value = preg_replace('#\'\s+#',"'",$value); //pour supprimer les espaces qui sont aprés l'apostrophe
                $value = preg_replace('#\(\s+#',"(",$value); //pour supprimer les espaces qui sont aprés l'ouverture parenthèse 
                $value = preg_replace('#\s+\)#',")",$value); //pour supprimer les espaces qui sont avant la fermeture des parenthèses
                $value = preg_replace('#\s+\.#',".",$value); //pour supprimer les espaces qui sont avant un point final
                $value = preg_replace('#,\s+#',",",$value);  //pour supprimer les espaces qui sont aprés la virgule
                $value = preg_replace('#\s+,#',",",$value);  //pour supprimer les espaces qui sont avant la virgule
                $value = preg_replace('#;\s+#',";",$value);  //pour supprimer les espaces qui sont aprés un point virgule
                $value = preg_replace('#\s+;#',";",$value);  //pour supprimer les espaces qui sont aavant un point virgule
                $value = preg_replace('#’\s+#',"’",$value);  //pour supprimer les espaces qui sont aprés un apostrophe
                $value = preg_replace('#\s+’#',"’",$value);  //pour supprimer les espaces qui sont avant un apostrophe
                $value = preg_replace('#«\s+#',"«",$value);  //pour supprimer les espaces qui sont aprés un guillemet
                $value = preg_replace('#\s+»#',"»",$value);  //pour supprimer les espaces qui sont aavant un guillement

                $tab[$i] = $value;
                $i++;
            }
            foreach($tab as $value)
            {
                if(preg_match('#^[a-z]#',$value))
                {
                    $maj = strtoupper($value[0]);
                    $value = preg_replace('#^[a-z]#',$maj,$value);
                    $tab_corrected[] = $value;
                }
                else
                {
                    $tab_corrected[] = $value;
                }
                
            }
            echo '<pre>';
            print_r($tab_corrected);
            echo '</pre>';
        }
        phrase_correction("Si un caractère         alphabétique est une minuscule (a à z) « is_lower ».   Si un caractère alphabétique est une Majuscule (A à Z) « is_uper » .         
        Si un caractère          est un    entier positif « is_entier »  .
       est ce que c'est un int?        
           La taille d ’ un          tableau ou   d’une chaine de           caractère « my_strlen »  .
           Hooo c ' est bien!              
        Si un mot est        valide (contient que des lettres alphabétiques) « is_valide »   . Si un caractère est dans une chaine « is_car_in_string » .  
       retourne une chaine en          supprimant les espace           de début et de fin « my_trim ».
        Retourne     une chaine en inversant la casse."
       );


    ?>

   
</body>
</html>