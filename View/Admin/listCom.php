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

<table>
    <thead>
    <tr class="titre_table">
        <th>Auteur</th>
        <th>Date</th>
        <th>Commentaire</th>
        <th>Nombre de signalement</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($comments as $comment) : ?>

        <tr>
        <td>
            <h3 class="titreBillet"><?= $this->clean($comment['author']) ?></h3>
        </td>
        <td>
            <time><?= $this->clean($comment['date']) ?></time>
        </td>
        <td>
            <h3><?= $this->clean($comment['contenu']) ?></h3>
        </td>
        <td>
            <h3><?= $comment['alert'] ?></h3>
        </td>


        <td><a id="bouton" href="admin/deleteComment/<?= $comment['id'] ?>"><input type="button" name="Supprimer"
                                                                                   value="Supprimer"
                                                                                   class="bouton_signal"></a></td>
        <?php if ($comment['alert'] > 0) : ?>
            <td><a id="bouton" href="admin/removeSignal/<?= $comment['id'] ?>"><input type="button" name="Supprimer"
                                                                                      value="RAZ des signalements"
                                                                                      class="bouton1"></a></td>

            </tr>
        <?php endif; ?>

    <?php endforeach; ?>

    </tbody>
</table>






