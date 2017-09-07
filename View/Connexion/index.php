<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 04/08/2017
 * Time: 03:47
 */

echo '<h2>Mon Blog - Connexion</h2>' ?>

    <p>Vous devez être connecté pour accéder à cette zone.</p>

    <form action="connexion/connect" method="post">
        <div id="margin"><input name="login" type="text" placeholder="Entrez votre login" class="connect" required autofocus><br />
            <input name="mdp" type="password" placeholder="Entrez votre mot de passe" class="connect" required><br /></div>
        <button type="submit" class="bouton">Connexion</button>
    </form>

<?php if (isset( $msgError )): ?>
    <p><?= $msgError ?></p>
<?php endif; ?>