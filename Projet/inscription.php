<?php require_once("inc/init.inc.php"); ?>
<?php require_once("inc/haut.inc.php"); ?>
 
<form method="post" action="">
    <label for="pseudo">Pseudo</label><br>
    <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo" pattern="[a-zA-Z0-9-_.]{1,20}" title="caractères acceptés : a-zA-Z0-9-_." required="required"><br><br>
          
    <label for="mdp">Mot de passe</label><br>
    <input type="password" id="mdp" name="mdp" required="required"><br><br>
    
    <input type="submit" name="inscription" value="S'inscrire">
</form>
 
<?php require_once("inc/bas.inc.php"); ?>