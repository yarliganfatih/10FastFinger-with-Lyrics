<?php
if($_GET)
{
	$p=$_GET["link"];;
	$txt = file_get_contents($p);
	echo $txt;
}
?>