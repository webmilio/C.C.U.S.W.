<?php include 'header.php'; ?>
<h2><center><?php printWN(); ?>: <u>Premi&egrave;re Partie</u></center></h2>
<p>Avant de continuer avec ce tutoriel, j'assume que vous avez d&eacute;ja un <i>IDE</i> (pour <i> Integrated Development Environment</i> ou <b>Environnement de d&eacute;veloppemment</b>), que vous en connaissez les bases et que vous savez quelles sont les &eacute;tapes dans la cr&eacute;ation du fichier d'index. Si tout ce que je vous dis sonne comme une langue &eacute;trang&egrave;re, cliquez <a href="./preface.php">i&ccedil;i</a>.</p>
<h3 class="subtitle"><u>&lt;html&gt;</u></h3>
<p>Tout d'abord, vous devez savoir que le code est sous forme de syntaxe sp&eacute;cifique. Nous allons programme en <b><i>HTML</i></b> (pour <i>HyperText Markup Language</i>). Un fichier doit HTML doit toujours contenir en premi&egrave;re ligne (sauf exception) la balise <code>&lt;html&gt;</code> et terminer avec <code>&lt;/html&gt;</code>. Ces balises &laquo; disent &raquo; au fichier lui-m&ecirc;me o&ugrave; il commence et se termine. Votre fichier devrait donc ressembler a ce&ccedil;i:<?php spoiler("<code>&lt;html&gt;<br />&lt;/html&gt;</code>"); ?></p><p>Si ce n'est pas le cas, vous pouvez copier ces deux lignes dans votre fichier et cela fera l'affaire.

<h3 class="subtitle"><u>&lt;head&gt;</u></h3>
<p>Tout cela est fort bien, mais la page n'affiche toujours aucun texte, image, ou quoi que ce soit! Alors nous devons passer &agrave; l'&eacute;tape suivante: la balise <code>&lt;head&gt;</code>. C'est dans &laquo; dans &raquo; ces balises que sont d&eacute;finies les mots-cl&eacute;s utiles aux moteurs de cherche, le titre de la page (qui apparait sur l'onglet de la page dans votre navigateur internet) ainsi que le style de la page, etc...
<?php include "footer.php"; ?>
