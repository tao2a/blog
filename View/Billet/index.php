<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 01/08/2017
 * Time: 05:29
 */
$this->title = "Mon Blog - " . $this->clean( $billet['title'] ); ?>

<div id="comment">
    <article class="episode">
        <header>
            <h1 class="titreBillet"><?= $this->clean( $billet['title'] ) ?></h1>
            <time><?= $this->clean( $billet['date'] ) ?></time>
        </header>
        <p><?= $billet['contenu']?></p>
    </article>


    <div id="reponses">
        <header>
            <h1 id="titreReponses">Réponses à : <?= $billet['title'] ?></h1>
        </header>

        <?php foreach ($comments as $comment): ?>
        <div id="reponse">
            <form method="post" action="comment/signal/<?=$comment['id']?>">
                <div class="reponse">
                    <p class="auteur"><?= $this->clean( $comment['author'] ) ?> |
                        <time class="time_reponse"><?= $this->clean( $comment['date'] ) ?></time>
                    </p>
                </div>
                <p class="grid_reponse"><?= $this->clean( $comment['contenu'] ) ?></p>
                <input type="submit" value="Signaler" class="bouton_signal"/>
                <br/>

            </form>
            <br/>
        </div>
        <?php endforeach; ?>

    <div id="bloc_com"
    <h3 class="com_bulle">Commenter   <img src="Contents/images/bulle.png" alt="bulle"/></h3>
    <form method="post" action="billet/comment">
        <input id="author" name="author" placeholder="Votre pseudo"
               required/><br/>
        <textarea id="txtCommentaire" name="contenu" cols="40" rows="5"
                  placeholder="Votre commentaire" required></textarea><br/>
        <input type="hidden" name="id" value="<?= $billet['id'] ?>"/>
        <input type="submit" value="Postez votre commentaire" class="bouton"/>
    </form>
</div>
</div>


