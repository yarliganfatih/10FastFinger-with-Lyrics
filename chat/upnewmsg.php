<?php
$dosyam = fopen('newmsg.txt','a+');
$text = fgets($dosyam);
$text++;
fputs($dosyam,$text);
fclose($dosyam);
?>