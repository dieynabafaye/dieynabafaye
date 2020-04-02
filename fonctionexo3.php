<?php
    /* fonction taille du tableau ou d'une chaine de caractère */
    function my_strlen($chaine){
       $taille = 0;
       for($i=0; isset($chaine[$i]); $i++){
           $taille++;
       }
       return $taille;
    }

     /* Caractère alphabétique  miniscule a à z */
     function is_lower($car){
       return ($car >= 'a' && $car <= 'z');
     }

    /* Caractère alphabétique  majiscule A à Z*/
    function is_uper($car){
        return ($car >= 'A' && $car <= 'Z');
    }
        
    /* fonction qui vérifie si un mot est valide (contient que des caractère alphabétique)*/
    function is_valide($chaine){
        for($i=0; $i<my_strlen($chaine); $i++){
            if( (!is_lower($chaine[$i])) && (!is_uper($chaine[$i])) ){
                return false;
            }
        }
        return true;
    }
    /* fonction qui vérifie si un caractère est dans une chaine */
    function is_car_in_string($caractere,$chaine){
        $result = false;
        for($i=0; $i<my_strlen($chaine); $i++){
            if($chaine[$i] = $caractere){
                $result = true;
            }
        }
        return $result;
    }


    /* fonction qui retourne une chaine en supprimant les espaces */
    function my_trim($chaine){
        $espace = "";
        for($i=0; $i<my_strlen($chaine); $i++){
            if(!($chaine[$i] = " ")){
                $espace .= $chaine[$i];
            }
        }
        return $espace;
    }

    
    /* fonction qui retourne un caractère inverser*/
    function inverse_car($caractere){
        for($fin=0, $i='a', $j='A'; $fin<26; $i++, $j++, $fin++){
            if($caractere == $i){
                return $j;
            }
            if($caractere == $j){
                return $i;
            }
        }
        return $caractere;
    }


    /* fonction qui retourne une chaine inverser*/
    function inverse_chaine($chaine){
        $chaine_inverse= "";
        for($i=0; $i<my_strlen($chaine); $i++){
                $chaine_inverse = $chaine_inverse.Inverse_car($chaine[$i]);
        }
        return $chaine_inverse;
    }


    /* fonction qui retourne une chaine en inversant la casse*/
    function inverse_cassse($chaine){
        $chaine_trimer= "";
        for($i=0; $i<my_strlen($chaine); $i++){
            if(is_lower($chaine[$i]) || is_uper($chaine[$i])){
                $chaine_trimer = $chaine_trimer.$chaine[$i];
            }
        }
        return $chaine_trimer;
    }



     /* Recherche du mot M */
     function lettreM($m)
     {
        $motM = false;
        for($i=0; $i<my_strlen($m); $i++)
        {
            if($m[$i]=='m' || $m[$i]=='M')
            {
                $motM = true;
            }
        }
         return $motM;
     }

     /* vérifie si le nombre est entier ou pas */
     function is_entier($chaine){
         $tab = [0,1,2,3,4,5,6,7,8,9];
         $true = false;
         for($j=0; $j<my_strlen($chaine); $j++)
         {
            for($i=0; $i<10; $i++)
            {
                if($chaine[$j] != $tab[$i])
                {
                    $true = true;
                }
                else
                {
                    $true = false;
                }
            }
        }
        return $true;
     }

     /* vérifie si le nombre est un nombre ou pas */
     
    function numeric($val){
        $by=my_strlen($val);
        $maj=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," ","_","-",".",",");
        $boll=false;
        for($y=0;$y<31;$y++){
            for ($j=0; $j <$by ; $j++) { 
                if($val[$j]==$maj[$y]){
                    $boll=true;
                }
            }
        }

        $e=0;
        $by=my_strlen($val);
       
        for($x='a';$e<26;$e++){
            for ($j=0; $j <$by ; $j++) { 
                if($val[$j]==$x){
                    $boll=true;
                }
            }
            $x++;

        }
        


        return $boll;
   

     }


?>