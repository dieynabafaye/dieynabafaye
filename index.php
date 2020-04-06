<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="index.php" method="post">
    <fieldset>
        <legend>Formulaire</legend>
        <p>
            <label for="nom">Nom: </label>
            <input type="text" name="nom" id="nom" placeholder="Nom"  required value="<?php if(isset($_POST['nom'])){echo $_POST['nom'];}?>"/><br><br>
            <label for="prénom">Prénom : </label>
            <input type="text" name="prénom" id="prénom" placeholder="Prenom" required value="<?php if(isset($_POST['prénom'])){echo $_POST['prénom'];}?>"/><br><br>
            <label for="adresse">Adresse : </label>
            <input type="text" name="adresse" id="adresse" placeholder="Adresse" maxlength="30" required value="<?php if(isset($_POST['adresse'])){echo $_POST['adresse'];}?>"/><br><br>
            <label for="numéro">Telephone :</label>
            <input type="tel" name="numéro" id="numéro" placeholder="Numero" maxlength="9" required value="<?php if(isset($_POST['numéro'])){echo $_POST['numéro'];}?>"/><br><br>
            <label for="confnuméro">Confirmer Telephone : </label>
            <input type="tel" name="confnuméro" id="confnuméro" placeholder="Confirmer numero" maxlength="9" required value="<?php if(isset($_POST['confnuméro'])){echo $_POST['confnuméro'];}?>"/>
        </p>
        <p>
            Genre : <br/>
            <select name="genre">
                <option value="choix " selected="selected">Choix</option>
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </select>
        </p>
        <p>
            Satisfait :<br/>
            <input type="radio" name="reponse" value="Oui" id="Oui"/>
            <label for="Oui">OUI</label><br>
            <input type="radio" name="reponse" value="Non" id="Non"/>
            <label for="Non">NON</label><br>
        </p>
        <p>
            Langues :<br/>
            <input type="checkbox" name="Français" id="Français" value="Français"/>
            <label for="Français">Français</label><br>
            <input type="checkbox" name="Anglais" id="Anglais" value="Anglais"/>
            <label for="Anglais">Anglais</label><br>
            <input type="checkbox" name="Espagnol" id="Espagnol" value="Espagnol"/>
            <label for="Espagnol">Espagnol</label><br>
            <input type="checkbox" name="Portuguais" id="Portuguais" value="Portuguais"/>
            <label for="Portuguais">Portuguais</label><br>
        </p>
        <p>
            <label for="commentaire">Votre commentaire : </label><br>
            <textarea name="commentaire" id="comentaire"><?php if(isset($_POST['commentaire'])){echo $_POST['commentaire'];}?></textarea>
        </p>

            <input type="submit" value="Valider" name="envoie">
            <input type="submit" value="Réinitialiser">
        </p>
        </fieldset>
    </form>

    <?php
        if(isset($_POST['envoie'])){
            $nom = $_POST['nom'];
            $prenom = $_POST['prénom'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['numéro'];
            $confirmtel = $_POST['confnuméro'];
            $genre = $_POST['genre'];
            $satisfait = $_POST['reponse'];
            $french = $_POST['Français'];
            $english = $_POST['Anglais'];
            $spanish = $_POST['Espagnol'];
            $portuguese = $_POST['Portuguais'];
            $message = $_POST['commentaire'];
  
           
            echo $nom.' <br>';
            echo $prenom.' <br>';
            echo $adresse.' <br>';
            echo $tel.' <br>';
            echo $confirmtel.' <br>';
            echo $genre.' <br>';
            echo $satisfait.' <br>';
            echo $french.' <br>';
            echo $english.' <br>';
            echo $spanish.' <br>';
            echo $portuguese.' <br>';
            echo $message.' <br>';
       
        }
    
    ?>
</body>
</html>