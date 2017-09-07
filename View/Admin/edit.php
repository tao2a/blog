<?php
$this->title = "Mon Blog - Administration";
$this->bodyclass = "formulaire"
?>

<h1>Edition des Articles</h1>

<form method="post" action="admin/edit/<?=$billet['id']?>">
    <input id="title_ty" name="title" placeholder="Titre" value="<?= $this->clean( $billet['title'] ) ?>" required />
    <br/>
    <label for="txtCommentaire">

    </label><textarea  id="txtCommentaire_admin" name="contenu" cols="40" rows="5" placeholder="" required>
<?= $this->clean( $billet['contenu'] ) ?>
    </textarea><br/>

        <input type="submit" value="Modifier l'article" class="bouton1"/>
</form>
