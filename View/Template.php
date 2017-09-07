<?php require_once 'inc/header.php' ?>

    <div id="flash"><?= $flash ?></div>

<body class="<?= $bodyclass  ?>">
<div id="global">
    <header>


        <nav role="navigation" class="'item1">


            <div id="nav-global">
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
                <ul id="navbar">

                    <?php if (isset( $_SESSION['login'] )): ?>
                        <li class=""><a href="home">Accueil</a></li>
                        <li class=""><a href="home/list">Mes textes</a></li>
                        <li class=""><a href="connexion/deconnecter">Se déconnecter</a></li>
                    <?php else: ?>
                        <li class=""><a href="home/list">Mes textes</a></li>
                        <li class=""><a href="home">Accueils</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <a href="home"><h1 id ="boot_title">Billet simple pour l'Alaska</h1></a>
    </header>


    <div id="contenu">
        <?= $contenu ?><!-- Élément spécifique -->
    </div>
 <?php require_once 'inc/footer.php';?>

