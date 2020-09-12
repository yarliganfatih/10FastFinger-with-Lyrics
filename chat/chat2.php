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
			echo '<script>window.location = "chat2.php"</script>';
	}
}
?>
<html>
<head>
<meta charset="UTF-8">
<title>Chatbox - ALFAtih</title>
<link rel='shortcut icon' type='image/x-icon' href='../favicon.png' />
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
	background-color: black;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar
{
	width: 6px;
	background-color: black;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar-thumb
{
	background-color: #F5F5F5;
	overflow-x: hidden;
}
pre{
	color:white;
	max-width:100%;
}
pre a{
	
	text-overflow: ellipsis; /* Ellipses (cross-browser) */
    -o-text-overflow: ellipsis; /* Ellipses (cross-browser) */
}
.sbutton{
	width:50px;
}
input.button-add {
    background-image: url(../img/send.png); /* 16px x 16px */
    background-color: transparent; /* make the button transparent */
    background-repeat: no-repeat;  /* make the background image appear only once */
    background-position: 0px 0px;  /* equivalent to 'top left' */
	background-size:40px 40px;
    border: none;           /* assuming we don't want any borders */
    cursor: pointer;        
    height: 40px;           /* make this the size of your image */
	width: 40px;
    padding-left: 50px;     /* make text start to the right of the image */
    vertical-align: middle; /* align the text vertically centered */
	float:left;
	z-index:2;
	position:absolute;
	right:5px;
	bottom:10px;
}
.pdiv{
	height: 30px;           /* make this the size of your image */
	width: 30px;
}
</style>
</head>
<body style='color:white;font-size:15px;'>
<div id="chatbox" class="force-overflow" STYLE=" overflow-x: hidden; overflow-y: scroll;width:100%;height: calc(100% - 40px);color:white;">
	<pre><b style="color:red;">Fatih</b> : Hoşgeldiniz <a id="pname"></a></pre>
	<?php
		echo "<script>document.getElementById('pname').innerHTML = '".$name."';</script>";
	?>
</div>
<div style="position:fixed;bottom:0;width:100%;">
	<form id="form" method="post" action="" autocomplete="off">
			<input id="msgbox" name="msgbox" value="" onclick="" style="background-color:#4d4d4d;color:white;float:left;width:calc(100% - 50px);font-size:25px;border:none;outline:none;opacity:1;padding: 2px;"/>
			
			<div class="pdiv"><input id="submsg" type="submit" name="submsg" type="button" value="XXX" class="button-add" /></div>
			
		
	</form>
</div>
<div style="display:none;">
<div id="div1"></div>
<div id="div2"></div>
<div id="div3"></div>
<div id="div4"></div>
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
	if(imsg < datan.length){
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