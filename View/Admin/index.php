<?php $this->title = "Mon Blog - Administration" ?>
<?php
$this->bodyclass = "formulaire"
?>
<h1>Administration</h1>


<div id="compteur"><p>Bienvenue, <?= $this->clean($login) ?> </p><br/>
    <p>Ce blog comporte <?= $this->clean($nbBillets) ?> billet(s) et <?= $this->clean($nbCommentaires) ?>
        commentaire(s).</p>
    <br/>
    <a href="connexion/deconnecter"><input type="button" name="deconnecter" value="Se déconnecter"
                                           class="bouton"></a>
</div>


<div class="wrapper">
    <div id="container">
        <div class="admin_boot">
            <h3 class="articles">Gestion des articles <br /> <a href="admin/articles"><input type="button" name="articles"
                                                                                      value="Go !"
                                                                                      class="bouton"></a></h3></div>
    </div>
    <div id="container">
        <div class="admin_boot">
            <h3 class="articles">Gestion des commentaires <br /><a href="admin/listCom"><input type="button" name="comments"
                                                                                    value="Go !"
                                                                                    class="bouton"></a></h3>

        </div>
    </div>
    <div id="container">
        <div class="admin_boot">
            <h3>Changement de mot de passe</h3><br/>
            <p>Pour votre sécurité, utilisez un mot de passe contenant :</p><br/>
            <ul class="info">
                <li>Entre 8 et 30 caractères</li>
                <li>Au moins une lettre minuscule et une lettre majuscule</li>
                <li>Un chiffre</li>
                <li>Et des caractères spéciaux parmi =/+|.-_~^@!#$%?*€,;:)(&. Il ne doit pas contenir les symboles < >
                </li>
            </ul>

            <form action="admin/changePass" method="post">

                <input type="password" placeholder="Mot de passe" id="pass" name="pass" class="connect"
                       required/> <br/>
                <input type="password" placeholder="Retapez votre mot de passe" id="verifPass"
                       name="verifPass"
                       class="connect" required/> <br/>

                <button type="submit" class="bouton">Changer de mot de passe</button>
            </form>
        </div>
    </div>

    <div id="container">
        <div class="admin_boot">
            <h3>Changement de Pseudo</h3>
            <form action="admin/changeLogin" method="post">
                <input type="text" placeholder="Ancien Pseudo" id="oldLogin" name="oldLogin" class="connect"
                       required/> <br/>
                <input type="text" id="pass" placeholder="Nouveau Pseudo" name="login" class="connect"
                       required/> <br/>

                <button type="submit" class="bouton">Changer de Pseudo</button>
            </form>
        </div>
    </div>


</div>
