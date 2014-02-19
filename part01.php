<?php include 'header.php'; ?>
<h2><center><?php printWN(); ?>: <u>Premi&egrave;re Partie</u></center></h2>
<p>La cr&eacute;ation d’un site web requi&egrave;re un environnement de d&eacute;veloppement (aussi appel&eacute;: IDE - <i>Integrated Development Environment</i>), que vous en connaissez les bases et que vous savez quelles sont les &eacute;tapes dans la cr&eacute;ation du fichier d'index. Si vous avez de la difficult&eacute; a comprendre le concept jusqu'a maintenant, cliquez <a href="./preface.php">i&ccedil;i</a>.</p>
<h3 class="subtitle"><u>&lt;html&gt;</u></h3>
<p>Tout d'abord, vous devez savoir que le code est sous forme de syntaxe sp&eacute;cifique. Nous allons programme en <b><i>HTML</i></b> (pour <i>HyperText Markup Language</i>). Un fichier doit HTML doit toujours contenir en premi&egrave;re ligne (sauf exception) la balise <code>&lt;html&gt;</code> et terminer avec <code>&lt;/html&gt;</code>. Ces balises &laquo; disent &raquo; au fichier lui-m&ecirc;me o&ugrave; il commence et se termine. Votre fichier devrait donc ressembler a ce&ccedil;i:<?php spoiler("<br /><code>&lt;html&gt;<br />&lt;/html&gt;</code>"); ?></p><p>Si ce n'est pas le cas, vous pouvez copier ces deux lignes dans votre fichier et cela fera l'affaire.</p>

<h3 class="subtitle"><u>&lt;head&gt;</u></h3>
<p>Tout cela est fort bien, mais la page n'affiche toujours aucun texte, image, ou quoi que ce soit! Alors nous devons passer &agrave; l'&eacute;tape suivante: la balise <code>&lt;head&gt;</code>. C'est dans &laquo; dans &raquo; ces balises que sont d&eacute;finies les mots-cl&eacute;s utiles aux moteurs de cherche, le titre de la page (qui apparait sur l'onglet de la page dans votre navigateur internet) ainsi que le style de la page, etc...
Votre fichier devrait donc ressembler a ce&ccedil;i:<?php spoiler("<br /><code>&lt;html&gt;<br />&lt;head&gt;<br />&lt;/head&gt;<br />&lt;/html&gt;</code>"); ?></p><p>Si ce n'est pas le cas, vous pouvez copier ces deux lignes dans votre fichier et cela fera l'affaire.</p>

<h3 class="subtitle"><u>&lt;body&gt;</u></h3>
<p>Les balises <code>&lt;body&gt;</code> et <code>&lt;/body&gt;</code> disent au navigateur ou commence l'essentiel de la page web et ou il se termine. C'est &laquo; dans &raquo; ces balises que ce retrouve le contenu de la page.Votre fichier devrait donc ressembler a ce&ccedil;i:<?php spoiler("<br /><code>&lt;html&gt;<br />&lt;head&gt;<br />&lt;body&gt;<br />&lt;/body&gt;<br />&lt;/head&gt;<br />&lt;/html&gt;</code>"); ?></p>

<br /><br />
<center><a href="./preface.php"><= Pr&eacute;face</a> || <a href="./part02.php"> Deuxi&egrave;me Partie =></a></center>
<br />

<?php include "footer.php"; ?>
