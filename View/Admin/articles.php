<?php
$this->bodyclass = "formulaire"
?>


<h1 class="t_title">Gestion des Articles <a href="Admin/newPost"><br /><input type="button" name="articles"
                                              value="Nouvel Article"
                                              class="bouton"></a></h1>


<table>
    <thead>
    <tr class="titre_table">
        <th>Titre</th>

        <th>Date</th>



    </tr>
    </thead>
    <tbody>
    <?php foreach ($billets as $billet): ?>

        <tr>
            <td><h3 class="titreBillet"><?= $this->clean( $billet['title'] ) ?></h3></a></td>

            <td>
                <time><?= $this->clean( $billet['date'] ) ?></time>
            </td>

            <td><a id="bouton" href="admin/edit/<?=$billet['id']?>"><input type="button" name="Editer" value="Editer" class="bouton1"></a>
            <td> <a id="bouton" href="admin/delete/<?=$billet['id']?>"><input type="button" name="Supprimer" value="Supprimer"
                                                          class="bouton_signal"></a></td></div>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
