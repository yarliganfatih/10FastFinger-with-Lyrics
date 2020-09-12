<?php
$name = file_get_contents("../name.txt");

if(isset($_POST['submsg'])){
$tar = time();
$msg = $_POST['msgbox']; //isim
$scriptcode = "</script>";
	if (stripos($msg, $scriptcode) !== false) {
		echo "<center><u>Access Denied!</u></center>";
	}else {
			$kaydet = $name."[,]".$tar."[,]".$msg."[;]";
			$dosya = fopen("chat1.txt","a+");
			fwrite($dosya,$kaydet);
			//header("Location:player2.php");
			$text = file_get_contents("newmsg.txt");
			$text++;
			file_put_contents("newmsg.txt", $text);
			echo '<script>window.location = "chat1.php"</script>';
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Chatbox - ALFAtih</title>
<link rel='shortcut icon' type='image/x-icon' href='../favicon.png' /><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<style>
pre{
	margin:0px;
}
@font-face {
			font-family: 'myfont';
			src: url('../font.ttf');
}
body{
}
.force-overflow::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: gray;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar
{
	width: 6px;
	background-color: gray;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar-thumb
{
	background-color: #F5F5F5;
	overflow-x: hidden;
}
pre{
	color:white;
}
</style>
</head>
<body style='font-size:20px;color:white;'>
<div id="chatbox" class="force-overflow" STYLE=" overflow-x: hidden; overflow-y: scroll;width:100%;height: calc(100% - 61px);color:white;">
	<!-- <pre style="color:lime;"><b>New Update</b> : Draw Mode + Chatbox</pre> -->
	<pre><b style="color:red;">Fatih</b> : Hoşgeldiniz <a id="pname"></a></pre>
	<?php
		echo "<script>document.getElementById('pname').innerHTML = '".$name."';</script>";
	?>
</div>
<div style="position:fixed;bottom:0;width:100%;">
	<form id="form" method="post" action="" autocomplete="off">
			<input id="msgbox" name="msgbox" value="" onclick="" style="background-color:#4d4d4d;color:white;float:left;width:75%;font-size:25px;border:none;outline:none;opacity:1;padding: 2px;"/>
			<p><input id="submsg" type="submit" class="btn btn-outline-light button" name="submsg" value="Gönder" style="width:25%;height:40px;" onclick=""/></p>
	</form>
</div>
<div style="display:none;">
<div id="div1"></div>
<div id="div2"></div>
<div id="div3"></div>
</div>
<script>
var input = document.getElementById("msgbox");
input.addEventListener("keyup", function(event) {
  if (event.keyCode === 13) {
    event.preventDefault();
    document.getElementById("submsg").click();
  }
});
function show(link,get){
		  $(document).ready(function(){
		  $.ajax({url: link, success: function(result){
		  $(get).html(result);
				}});
			});
		}
var loop = 0;
var imsg = 0;
function showmsg(){
	//komple sil for döngüsüyle tekrar yaz
	var datam = document.getElementById('div1').innerHTML;
	var datan = datam.split("[;]");
	var data = datan[imsg].split("[,]");
	var g = document.createElement('pre');
	var b = document.createElement('b');
	var a = document.createElement('a');
	b.innerHTML = data[0];
	a.innerHTML = " : " + data[2];
	g.appendChild(b);
	g.appendChild(a);
	document.getElementById("chatbox").appendChild(g);
	$("html, #chatbox").animate({ scrollTop: "1000px" }, 10);
	imsg++;
	console.log(imsg);
	if(imsg < datan.length-1){
		showmsg();
	}
}

function floop(){
	show("getchat1.php","#div1");
	var datam = document.getElementById('div1').innerHTML;
	var datan = datam.split("[;]");
	if(loop==0){
		
	}
	if(imsg < datan.length-1){
		showmsg();
	}
	loop++;
	window.setTimeout( () => {
		floop();
	}, 1000);
}
floop();
window.addEventListener('resize', e => {
	//document.getElementById("chatbox").style.height = 200 - document.getElementById("form").style.height;
});

</script>
</body>
</html>