<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 28/08/2017
 * Time: 15:49
 */
$this->bodyclass = "formulaire"
?>

<h1 class="t_title">Gestion des commentaires</h1>

<h2>Liste des commentaires : </h2>

<br/>
<div id="reponses">

    <?php

    foreach ($comments as $comment) : ?>
    <div id="reponse">

        <p><?= $this->clean( $comment['author'] ) ?> : </p>
        <time><?= $this->clean( $comment['date'] ) ?></time>
        <p><?= $this->clean( $comment['contenu'] ) ?></p>
        <h4>Nombre de signalement : <?= $comment['alert'] ?></h4>

        <a id="bouton" href="admin/deleteComment/<?= $comment['id'] ?>"><input type="button" name="Supprimer"
                                                                                 value="Supprimer"
                                                                                 class="bouton"></a>
        <?php if ($comment['alert'] > 0) : ?>
            <a id="bouton" href="admin/removeSignal/<?= $comment['id'] ?>"><input type="button" name="Supprimer"
                                                                                    value="RAZ des signalements"
                                                                                    class="bouton1"></a>


        <?php endif; ?>
    </div>
    <?php endforeach; ?>
</div>
