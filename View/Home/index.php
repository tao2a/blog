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
        <div id="one">
            <div id="container_boot">
                <p><img src="Contents/images/man.jpg" alt="man" class="portrait" title="Alain Forteroche"/>«Il est sur
                    que Alain forteroche est sûrement le plus grand écrivain du monde» c'est ce qu'a affirmé Robert
                    Desnos jeudi dernier à un parterre de journalistes rassemblés à Sophia Antipolis pour le rencontrer.
                </p>

                <p> Cette déclaration de Robert Desnos nous pousse à revenir sur la carrière de forteroche. Né en 1949
                    Alain forteroche n'a eu cesse depuis d'épater la galerie par ces incessants apports dans le monde de
                    la culture, des sciences en particulier au sein de la «confédération des écrivains de Sophia
                    Antipolis de France et de Navarre» puissante association créée par Clovis Ier quand il prit le
                    pouvoir un jeudi peu avant l'heure du repas.</p>

                <p> Alain forteroche a entamé son chemin vers la gloire en inventant les tondeuses qui devinrent depuis
                    le summum de la distinction pour tout homme moderne. En effet qui depuis n'a pas exhibé fièrement
                    ses tondeuses à la foule envieuse ? Pour cela, les habitants de la planète entière et en particulier
                    de Sophia Antipolis lui sont reconnaissants.</p>

                <p>C'est par un beau jour en mars que forteroche a rencontré Jeanne Empeuplus et décida de la conquérir
                    grâce à son charme et au prestige que lui avait donné l'invention des tondeuses. Jeanne Empeuplus
                    dira pourtant plus tard «ce qui m'a fait le plus craquer chez Alain, c'est la proéminence de ses
                    épaules!». Elle ne s'en est d'ailleurs jamais remis depuis.</p>
                <p>15 ans plus tard il découvre dans une librairie poussiéreuse de Sophia Antipolis un livre de Robert
                    Desnos intitulé : les tondeuses poussent sous les épaules de Jeanne.</p>
                <p>Pour Alain forteroche c'est une révélation, il s'attelle à la rédaction de :«Les écrivains de Sophia
                    Antipolis gouverneront en mars », Une œuvre majeure qui l'occupera jusqu'à ce qu'il atteigne 68 ans
                    cet
                    opus sortira en librairie jeudi prochain.</p>
                <p>Le livre est tant attendu que son éditeur prétend pouvoir gagner, grâce à sa publication, une somme
                    qui
                    pourrai atteindre 5620 euros et cinquante cents.</p>

                <p>Comme l'a si justement fait remarquer Robert Desnos «Ce livre est une œuvre impérissable que
                    forteroche a écrit avec
                    ses épaules sans aucune concession.».</p></div>
        </div>

    </article>

    <article>

        <h1 id="boot_title2">Mes derniers chapitres</h1>


        <?php foreach ($billets as $billet): ?>
            <div id="container_boot">

                <header>
                    <a href="<?= "billet/index/" . $billet['id'] ?>">
                        <h1 class="titreBillet_boot"><?= $this->clean($billet['title']) ?></h1>
                    </a>
                    <time><?= $this->clean($billet['date']) ?></time>
                </header>
                <p><?= $this->clean(mb_substr(strip_tags($billet['contenu']), 0, 450)) ?>...<a
                            href="<?= "billet/index/" . $billet['id'] ?>" class="suite">Lire la suite >></a></p>
                <br/>
                <a href="<?= "billet/index/" . $billet['id'] ?>">
            </div>

        <?php endforeach; ?>
    </article>
</div>


</body>
