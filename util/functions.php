<?php
require 'define.php';
//Prints the website name.
function printWN()
{
	global $websitetitle;
	echo $websitetitle;
}

function spoiler($spoiler_content)
{
	echo '<div class="spoiler">
    <input type="button" onclick="showSpoiler(this);" value="Montrer/Cacher" />
    <div class="inner" style="display:none;">' .
    $spoiler_content . '</div></div>';
}

?>