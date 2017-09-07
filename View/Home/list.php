<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 01/08/2017
 * Time: 03:21
 */


$this->title = 'Mon Blog' ?>

<div class="wrapper">
<?php foreach ($billets as $billet): ?>
    <div id="container">
        <article>
            <header>
                <a href="<?= "billet/index/" . $billet['id'] ?>">
                    <h1 class="titreBillet_boot"><?= $this->clean( $billet['title'] ) ?></h1>
                </a>
                <time><?= $this->clean( $billet['date'] ) ?></time>
            </header>
            <p><?= $this->clean( mb_substr( strip_tags( $billet['contenu'] ), 0, 150 ) ) ?>...<br /><a
                        href="<?= "billet/index/" . $billet['id'] ?>"  class="suite">Lire la suite >></a></p><br/>
            <a href="<?= "billet/index/" . $billet['id'] ?>">
                <p>Commentaire(s) (<?= $this->clean( $billet['nbCom'] ) ?>)</p></a>

        </article>
    </div>

<?php endforeach; ?>
</div>
