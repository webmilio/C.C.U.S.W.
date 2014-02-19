<?php include 'header.php'; ?>
<h2><center><?php printWN(); ?>: <u>Deuxi&egrave;me Partie</u></center></h2>
<h3 class="subtitle"><u>&lt;p&gt;</u></h3>
<p>Si il y a bien une balise (autre que ceux de la <a href="./part01.php">premi&egrave;re partie</a>) qui est extr&egrave;mement simple &agrave; comprendre, c'est <code>&lt;p&gt;</code> et <code>&lt;/p&gt;</code>. En fait, ce que vous lisez fait parti de ces balises. Malgr&eacute; le fait que le texte sur une page fait majoritairement partie du corps de la page, elle peut se situer n'importe o&ugrave; entre les balises <code>&lt;html&gt;</code> et <code>&lt;/html&gt;</code>. Voi&ccedil;i un exemple: <?php spoiler("<br /><code>&lt;p&gt;Ceci est une ligne de texte.&lt;/p&gt;</code><p>Ceci est une ligne de texte.</p>"); ?></p>

<h3 class="subtitle"><u>&lt;br /&gt;</u></h3>
<p>Cette balise s'&eacute;crit lit&eacute;rallement comme cela: <code>&lt;br /&gt;</code>. Elle est l'&eacute;quivalent du retour de chariot (touche Entrer). Lorsqu'elle est plac&eacute;e &agrave; l'int&eacute;rieur des balises &lt;p&gt;, elle a un comportement diff&eacute;rent que lorsqu'elle est &agrave; l'ext&eacute;rieur de ces balises.<?php spoiler("<br /><code>&lt;p&gt;Ceci est&lt;br /&gt; une ligne de texte.&lt;/p&gt;&lt;br /&gt;&lt;p&gt;Il y a un espace entre cette ligne et la derni&egrave;re qui est diff&eacute;rent de lui entre les deux premi&egrave;re.&lt;/p&gt;</code><p>Ceci est<br /> une ligne de texte.</p><br /><p>Il y a un espace entre cette ligne et la derni&egrave;re qui est diff&eacute;rent de lui entre les deux premi&egrave;re."); ?></p>

<h3 class="subtitle"><u>&lt;a&gt;</u></h3>
<p>La deuxi&egrave;me balise que je tiens &agrave; vous montrer. Cette balise est majoritairement utilis&eacute;e dans la cr&eacute; de liens et a plusieurs param&egrave;tres:</p>
<ul>
<li><code>href</code>: l'emplacement o&ugrave; le lien renvoi;</li>
<li><code>target</code>: si le lien, lorsque l'on clique dessus, ouvre un nouvel onglet, une nouvel page ou si il utilise le m&ecirc;me onglet.</li>
<li><code>id</code>: nous n'aborderons pas ce param&egrave; dans cette partie du tutorielle.</li>
</ul>
<p>
Toutefois, cette balise n'est pas aussi simple que la pr&eacute;c&eacute;dente. Voi&ccedil;i de quoi elle a l'air:
<code>&lt;a href=&quot;lien&quot;&gt;texte &agrave; afficher&lt;/a&gt;</code>
Voi&ccedil;i quelque exemple:
<?php
$ex1 = '<br /><code>&lt;a href="http://google.com"&gt;texte &agrave; afficher&lt;/a&gt;</code><br /><a href="http://google.ca">http://www.google.ca</a><br />';
$ex2 = '<br /><code>&lt;a href="http://google.com" target="_blank"&gt;texte &agrave; afficher&lt;/a&gt;</code><br /><a href="http://google.ca" target="_blank">http://www.google.ca</a><br />Ce lien ouvre une page dans un nouvel onglet/fen&ecirc;tre car son param&egrave;tre <code>target</code> &agrave la valeur <code>_blank</code><br />';
$ex3 = '<br /><code>&lt;a href="http://ccusw.comoj.com/randomlink.php" target="_self"&gt;texte &agrave; afficher&lt;/a&gt;</code><br /><a href="./randomlink.php" target="_self">http://ccusw.comoj.com/randomlink.php</a><br />Ce lien renvoi &agrave; une autre page dans la m&ecirc;me fen&ecirc;tre/onglet car son param&egrave;tre <code>target</code> &agrave la valeur <code>_self</code>. Ceci est la valeur par d&eacute;faut des liens.<br />';
spoiler($ex1 . $ex2 . $ex3);
?>
</p>

<br /><br />
<center><a href="./part01.php"><= Premi&egrave;re Partie</a> || <a href="./part03.php"> Troisi&egrave;me Partie =></a></center>
<br />

<?php include "footer.php"; ?>