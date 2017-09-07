<?php
/**
 * Created by PhpStorm.
 * User: auccia
 * Date: 07/09/2017
 * Time: 14:52
 */
$this->bodyclass = "boot";
$this->title = "Mon Blog -Billet simple pour l'Alaska "; ?>

<br/>
<div class="wrapper_boot">

    <article>
        <h1 id="boot_title2">A propos de l'auteur</h1>
        <div id="plop">
        <div id="container_boot">
           <p><img src="/Contents/images/man.jpg" alt="man" class="portrait"/>Généralement, on utilise un texte en faux
                latin (le texte ne veut rien dire, il a été modifié), le Lorem ipsum ou Lipsum, qui permet donc de faire
                office de texte d'attente. L'avantage de le mettre en latin est que l'opérateur sait au premier coup
                d'oeil
                que la page contenant ces lignes n'est pas valide, et surtout l'attention du client n'est pas dérangée
                par
                le contenu, il demeure concentré seulement sur l'aspect graphique.</p>

            <p> Ce texte a pour autre avantage d'utiliser des mots de longueur variable, essayant de simuler une
                occupation
                normale. La méthode simpliste consistant à copier-coller un court texte plusieurs fois (« ceci est un
                faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte ceci est un faux-texte
                ») a
                l'inconvénient de ne pas permettre une juste appréciation typographique du résultat final.</p>

            <p> Il circule des centaines de versions différentes du Lorem ipsum, mais ce texte aurait originellement été
                tiré de l'ouvrage de Cicéron, De Finibus Bonorum et Malorum (Liber Primus, 32), texte populaire à cette
                époque, dont l'une des premières phrases est : « Neque porro quisquam est qui dolorem ipsum quia dolor
                sit
                amet, consectetur, adipisci velit... » (« Il n'existe personne qui aime la souffrance pour elle-même, ni
                qui
                la recherche ni qui la veuille pour ce qu'elle est... »).</p>

            <p> Expert en utilisabilité des sites web et des logiciels, Jakob Nielsen souligne que l'une des limites de
                l'utilisation du faux-texte dans la conception de sites web est que ce texte n'étant jamais lu, il ne
                permet
                pas de vérifier sa lisibilité effective. La lecture à l'écran étant plus difficile, cet aspect est
                pourtant
                essentiel. Nielsen préconise donc l'utilisation de textes représentatifs plutôt que du lorem ipsum. On
                peut
                aussi faire remarquer que les formules conçues avec du faux-texte ont tendance à sous-estimer l'espace
                nécessaire à une titraille immédiatement intelligible, ce qui oblige les rédactions à formuler ensuite
                des
                titres simplificateurs, voire inexacts, pour ne pas dépasser l'espace imparti.</p></div>
        </div>
    </article>


    <div id="container_boot">
        <h1 id="boot_title2">Mes derniers chapitres</h1>

        <?php foreach ($billets as $billet): ?>
            <div id="container_boot1">
                <article>
                    <header>
                        <a href="<?= "billet/index/" . $billet['id'] ?>">
                            <h1 class="titreBillet_boot"><?= $this->clean( $billet['title'] ) ?></h1>
                        </a>
                        <time><?= $this->clean( $billet['date'] ) ?></time>
                    </header>
                    <p><?= $this->clean( mb_substr( strip_tags( $billet['contenu'] ), 0, 450 ) ) ?>...<a
                            href="<?= "billet/index/" . $billet['id'] ?>" class="suite">Lire la suite >></a></p>
                    <br/>
                    <a href="<?= "billet/index/" . $billet['id'] ?>">
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</body>
