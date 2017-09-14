<?php $this->title = "Mon Blog - Administration";
$this->bodyclass = "formulaire"
?>
<div id="newWrap">
    <form method="post" action="admin/newPost">
        <input id="author" name="title" placeholder="Titre" required/>
        <br/>
        <label for="txtCommentaire">

        </label><textarea id="txtCommentaire_admin" name="contenu" cols="40" rows="5" placeholder="" value="contenu"
                          required>

    </textarea><br/>

        <input type="submit" value="Postez votre article" class="bouton1"/>
    </form>
</div>