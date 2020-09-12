<?php
if($_GET)
{
	$link=$_GET["link"];
	$input=$_GET["input"];
	$dosyam = fopen("leaderboard/".$link.".txt","a+");
	fwrite($dosyam,"[;]".$input);
	fclose($dosyam);
	$data=$_GET["data"];
	$veri = explode(",", $input); 
	file_put_contents("data/".$link."/".$veri[0].".txt", $data); 
}
?>