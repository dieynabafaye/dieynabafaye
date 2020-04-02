<?php
    /* fonction test Nombre premier */
    function testNbpremier($a){
        $i=2;
        $b=0;
        while($i<=$a/2){
            if(($a%$i)==0){
                $b=1;
            }
            $i++;
        }
        return $b==0;
    }
    /* fonction taille du tableau */
    function tailletab($tableau){
        $compteur = 0;
        foreach($tableau as $key){
            $compteur++;
        }
        return $compteur;
    }
    /* fonction calcul moyenne */
    function moyenne($tableau){
        $som = 0;
        for($i=0; $i<tailletab($tableau); $i++){
            $som = $som + $tableau[$i];
        }
        return $som/tailletab($tableau);
    }
    
    /* couleur des lignes Exo2 */
    function couleurligne($color){
        if($color==1){
            $c = "#5472AE";
        }
        else{
            $c = "#5472AE";
        }
        return 'style="backgraound-color '.$c. '"';
    }
    /* Affichage tableau mois Exo2 */
    function affichtabMois($tableau,$cle){
        $j=1;
        $n=1;
        echo '<table class="tableau">';
        for($i=1; $i<=4; $i++){
            $ligne=0;
            echo '<tr class="row"  bgcolor=" '.couleurligne($n). '>';
            while($j<=12){
                echo '<td class="data" '.couleurligne($n). '>';
                echo $j;
                echo '</td>';
                echo '<td class="data" '.couleurligne($n). '>';
                echo $tableau[$j][$cle];
                echo '</td>';
                $ligne++;
                $j++;
                if($ligne==3){
                    break;
                    $n++;
                }
            }
            echo '</tr>';
        }
        echo '</table>';
    }
?>