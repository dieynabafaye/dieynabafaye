<?php
session_start();
function paginate($tab,$x){
    $op=0;
            if(isset($x) && preg_match('/^[0-9]+$/',$x)){
                $_SESSION['trouve']=false;    
                $_SESSION['tabb']=10*$x;
                $_SESSION['increment']=$_SESSION['tabb']-10;

                echo"<table>";
                while($_SESSION['increment']<$_SESSION['tabb']){
                    //   for($e=$_SESSION['b'];$e<$_SESSION['taille_tab'];$e++){
                        for($s=0;$s<2;$s++){
                            if($op%2==0){$col='blanc';}else{$col='gris';}
                            $op++;
                           echo"<tr class='$col'>";
                           for($b=0;$b<5;$b++){
                           if(array_key_exists($_SESSION['increment'],$tab)){
                           echo "<td>".$tab[$_SESSION['increment']]."</td>";
                           $_SESSION['increment']++;
                           $_SESSION['trouve']=true;
                           if(!array_key_exists($_SESSION['increment']+1,$tab)){
                               $_SESSION['tabb']=$_SESSION['increment'];
                   
                           }
                       }else{$_SESSION['tabb']=$_SESSION['increment'];}
                       
                   }echo"</tr>";
               
               
               
               
               
                   }
               }
               echo"</table>";

            }

        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice1</title>
</head>
<body>
    <?php
    $timestart = microtime(true);
    include('Fonction.php');
        $valeur = $valerreur= "";
        $nb = false;
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $valeur = $_POST['valeur'];
            $nb = true;
            $T1 = array();
            $T = array();

           

            /* vérification du type de la valeur saisi */
            if(preg_match('#[^0-9]#', $valeur)){
                $valerreur = "Donner un nombre!";
                $nb = false;
            }
        }
        if(isset($_POST['valider'])){
        if(!empty($valeur)){

        if($nb && ($valeur>=50)){
            $valerreur = "";
            for($i=2; $i<$valeur; $i++){
                if(testNbpremier($i)){
                    $T1[] = $i;
                }
            }
         
            $_SESSION['T1'] = $T1;
       

        /* clé inférieur et clé supérieur */
        for($i=0; $i<tailletab($T1); $i++){
            if(moyenne($T1)>$T1[$i]){
                $inferieur[] = $T1[$i];
            }
            else{
                $superieur[] = $T1[$i];
            }
        }

        /* affectation des deux clés dans le tableau T*/
        $T['inferieur'] = $inferieur;
        $T['superieur'] = $superieur;
        
        
        /* utilisation des sessions */
        $_SESSION['inferieur'] = $inferieur;
        $_SESSION['superieur'] = $superieur;
        header('location:Exo1.php?page=1&diana=1');
        }
        
        
    else{
        echo "Le champ ne doit pas être vide!";
    }
        $timesend = microtime(true);
        $time = $timesend - $timestart;
        $load_time = number_format($time, 3);
        echo "<br><br>Début du script: ".date("H : i : s", $timestart);
        echo "<br>Fin du script: ".date("H : i : s", $timesend);
        echo "<br> Script exécuté en : ".$load_time. "sec";
    }

}
?>

    <form method="post" action="<?=$_SERVER['PHP_SELF']?>" class="form">
       <label class="labelput">Entrer une valeur:</label>
       <input type="text" name="valeur" id="valeur" class="putvaleur" value="<?=$valeur;?>"><br/>
       <p class="comment"><?=$valerreur?></p>
       <input type="submit" value="Valider" name="valider">
    </form>

   
</body>
</html>
<?php
if(isset($_GET['page'])){
    $NumeroPage = $_GET['page'];
 paginate($_SESSION['inferieur'],$_GET['page']);
        
        

        $totale = count($_SESSION['inferieur']);
        $nbpage = ceil($totale / 10);
        $c = $_GET['diana'];
        
        for($i=1; $i<=$nbpage; $i++)
        {
        echo "<a href='Exo1.php?page=$i&diana=$c'>$i</a> ";
        }
}
    echo'<br><br>';
if(isset($_GET['diana'])){
    paginate($_SESSION['superieur'],$_GET['diana']);

      
            
        $totale = count($_SESSION['superieur']);
        $nbpage = ceil($totale / 10);
        $c = $_GET['page'];
        for($i=1; $i<=$nbpage; $i++)
        {
            echo "<a href='Exo1.php?diana=$i&page=$c'>$i</a> ";
        }
    
}
    

?>