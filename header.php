<?php require 'util/define.php'; include 'util/functions.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="util/style.css">
<title><?php global $websitename; echo $websitename; ?></title>
<div id="navbar"">
	<center>
	<ul>
    <li style="position:relative;bottom:2px;"><b><span style="color:white;"><?php echo $websitename; ?></span></b></li><br/>
    <li><a href="/index.php">Index</a></li> 
    <li><a href="/annexe.php">Annexe</a></li> 
    <li><a href="/bibliographie.php">Bibliographie</a></li> 
	</ul>
    </center>
</div>
<script type="text/javascript">
function showSpoiler(obj)
    {
    var inner = obj.parentNode.getElementsByTagName("div")[0];
    if (inner.style.display == "none")
        inner.style.display = "";
    else
        inner.style.display = "none";
    }
</script>
</head>
<body>
