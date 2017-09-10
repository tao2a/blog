<?php require_once 'inc/header.php' ?>

<div id="flash"><?= $flash ?></div>

<body class="<?= $bodyclass ?>">
<!--<div id="global">-->
<header>

    <div class="inner">

        <nav role="navigation" class="'item1">

        <div class="content">
            <div class="admin-panel"><label for="toggle" class="admin-text"><img src="Contents/images/menu.png"></label></div>
            <input type="checkbox" id="toggle">
            <div class="menu">
                <div class="arrow"></div>
                <?php if (isset($_SESSION['login'])): ?>
                    <a href="Home">Accueil<span></span></a>
                    <a href="Home/list">Mes textes<span></span></a>
                    <a href="connexion/deconnecter">Se déconnecter<span></span></a>
                <?php else: ?>
                    <a href="Home">Accueil<span></span></a>
                    <a href="Home/list">Mes textes<span></span></a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <a href="home"><h1 id="boot_title">Billet simple pour l'Alaska</h1></a>

</header>



    <?= $contenu ?><!-- Élément spécifique -->





<footer>

    <div id="logo">
        <a href="#"><img class="shadowfilter" src="Contents/images/facebook.png" alt="facebook"/></a>
        <a href="https://twitter.com/fred2a88"><img class="shadowfilter" src="Contents/images/twitter.png"
                                                    alt="twitter"/></a>
        <a href="https://www.linkedin.com/in/frédéric-d-278069130"><img class="shadowfilter"
                                                                        src="Contents/images/linkedin.png"
                                                                        alt="linkedin"/></a>
        <a href="https://github.com/tao2a/blog"><img class="shadowfilter" src="Contents/images/github.png"
                                                     alt="github"/></a>
    </div>


    <p><a href="Admin">Administration</a></p>
    <p><a href="home/mentions">Mentions légales</a></p>
    <p>&copy; 2017 Fred
    <p>
</footer>
</body>

</html>