<form method="POST" action="profil.php">
    <label for="prenom">Prénom</label>
    <input type="text" id="prenom" name="prenom" minlength="8" required="true" maxlength="50">
    <br><br>
    <label for="password">Mot de passe (8 caractères minimum)</label>
    <input type="password" id="pass" name="password" minlength="8" required>
    <br><br>
    <input type="submit" value="Soumettre">
</form>