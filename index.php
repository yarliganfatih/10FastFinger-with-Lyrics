<html>
<head>
<?php
if(isset($_POST['login1'])){
	$name = $_POST['name']; //name
	$music = $_POST['music']; //music
	echo '<script>window.location = "game.php?name='.$name.'&music='.$music.'"</script>';
}
?>
	<meta charset="UTF-8">
	<title>Bordo Klavyeli - ALFAtih</title>
	<link rel='shortcut icon' type='image/x-icon' href='../favicon.png' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link id="pagestyle" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<style>
		@font-face {
			font-family: 'myfont';
			src: url('fonts/font1.otf');
		}
		@font-face {
			font-family: 'myfont2';
			src: url('fonts/font2.ttf');
		}
		body{
			font-family: "myfont";
			font-size: 20px;
			background-image: url('img/div3.png');
			background-color:#1c0f45;
			color:white;
			background-position: center center;
			background-size: 1000px;
		}
		.beplayer{
			float:left;
			width:200px;
			height:200px;
			background-color:#800000;
			opacity:1;
			border:#FFF solid 2px;
			margin: 4px;
			padding: 10px;
		}
		.footer{
		}
		.button{
			font-family: 'myfont2';
			font-size:25px;
			width:300px;
		}
		#musiclist{
			padding:1%;
			padding-bottom:60px;
		}
		.board{
			width:400px;
			height:120px;
			border-radius:15px;
			border:1px solid white;
			color: white;
			text-shadow: 2px 2px 4px #000000;
			backgorund-color:black;
			font-family: "myfont2";
			opacity:0.9;
			margin-bottom:20px;
			word-wrap: break-word;
			float:left;
			margin:10px;
		}
		.selected2{
			margin-bottom:14px;
		}
		.selected{
			border:3px solid white;
			opacity:1;
		}
		.fullblur{
			position:absolute;
			height:120px;
			width:350px;
			background-image: url('img/musics/İrem_-_Hayalet_Sevgilim.jpg');
			background-repeat: no-repeat;
			background-position: center center;
			background-size: 100%;
			-webkit-filter: blur(5px);filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' ><filter id='blur5'><feGaussianBlur in='SourceGraphic' stdDeviation='5' /></filter></svg>#blur5");
			filter:blur(10px);
			z-index:-1;
		}
		.float{
			margin:5px;
			z-index:1;
			height:100px;
		}
		.mimg{
			border-radius:15px;
			width:100px;
			height:100px;
			float:left;
			margin-right:15px;
		}
		.minfo{
			float:left;
			padding:5px;
			text-align:left;
			width: calc(100% - 125px);
		}
		.singer{
			font-size:22px;
		}
		.song{
			opacity:0.8;
			font-size:16px;
			max-height:22px;
		}
		.zorluk{
			height:5px;
			border-radius:2.5px;
			padding-left:10%;
			width:90%;
			background: url('img/zorluk.png');
			background-size:350px;
			background-repeat: no-repeat;
			float:left;
		}
		.mstar{
			float:right;
			background: url('img/star.png');
			background-repeat: no-repeat;
			background-size: 100%;
			width: 25px;
			height: 25px;
		}
		.medal0{
			background: url('img/medal1.png');
		}
		.medal1{
			background: url('img/medal2.png');
		}
		.medal2{
			background: url('img/medal3.png');
		}
		.limgek{
			background: url('img/trophy.png');
		}
		.limg{
			float:left;
			background-repeat: no-repeat;
			background-size: 25px 25px;
			width: 25px;
			height: 25px;
		}
		.lname{
			float:left;
			margin-left:10px;
			color:white;
			text-shadow: 0px 0px 0px #FFFFFF;
		}
		.leader{
			text-align:left;
			margin-top:10px;
			height:30px;
			padding:5px;
			padding-bottom:0px;
			background: url('img/seffafb.png');
			border-radius:5px;
		}
		.ldown{
			background: url('img/down-arrow.png');
			background-repeat: no-repeat;
			background-size: 100%;
			width: 25px;
			height: 25px;
			float:right;
		}
		.lscore{
			float:right;
			color:Skyblue;
		}
		.leaderboard{
			padding:4%;
			padding-top:5%;
			display:none;
		}
		.lboard{
			width:calc(100% - 5px);
			height:30px;
			padding:5px;
			padding-bottom:0px;
			background: url('img/seffafb.png');
			border-radius:5px;
			margin-top:2%;
		}
		.bfixed{
			position:fixed;
			width:1000px;
			height:50px;
			background: url('img/seffafb2.png');
			bottom:0;
			padding:5px;
			left:calc(50% - 500px);
		}
		.binfo{
			width:70%;
			float:left;
			text-align: left;
			padding-left:150px;
			padding-top:5px;
		}
		.bbutton{
			float:left;
			width:60px;
		}
		.sbutton{
			width:80px;
			position:absolute;
			top:-30px;
		}
		.chatbox{
			width:96%;
			height:210px;
			border-radius:15px;
			border:1px solid white;
			color: white;
			padding:5px;
			margin-bottom:30px;
			background: url('img/seffafb.png');
		}
		.chatbox iframe{
			border: 0px;
			width:100%;
			height:180px;
		}
		.chatbox h3{
			margin:5px;
		}
		footer{
			opacity:0.75;
			font-family:Times New Roman;
			margin-bottom:60px;
		}
		.fullsize{
			position:fixed;
			left: calc(50% - 400px);
			top: 0;
			right: 0;
			bottom: 0;
			width: 800px;
			z-index:101;
			text-align: center;
			vertical-align: middle;
			padding-top:10%;
		}
		.fullsize img{
			width:200px;
		}
		.fullsize iframe{
			border:0;
		}
		.container{
		}
		.blur5::before{
		}
		.blur5 *{
		  -webkit-filter: blur(5px);filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' ><filter id='blur5'><feGaussianBlur in='SourceGraphic' stdDeviation='5' /></filter></svg>#blur5");
		  filter:blur(10px);
		}
		#loading section {
			margin:5%;
			padding-left:200px;
		}
		#loading section div {
			float:left;
			position:relative;
		}
		.lsbutton{
			max-width:55px;
			position:absolute;
			top:-8px;
			left:-12px;
		}
		.fulloffull{
			position:relative;
			top:0px;
			left:0px;
			width:866px;
		}
		.bosluk{
			width:100%;
			height:60px;
			margin-bottom:60px;
		}
	@media only screen and (min-width: 1000px) {
		body{
			background-image: url('img/div2.png');
			background-color:black;
			background-repeat: repeat-y;
		}
	}
	@media only screen and (max-width: 1000px) {
		
		.fulloffull{
			width:100%;
		}
		.board{
			width:100%;
			margin:0px;
			margin-bottom:20px;
		}
		.fullblur{
			width:90%;
		}
		.bfixed{
			width:105%;
			left:0px;
		}
		.binfo{
			padding-left:10px;
		}
		.sbutton{
			width:50px;
			position:absolute;
			top:-10px;
		}
		.fullsize{
			width: 100%;
			padding-top:30%;
			left:0;
		}
		#loading section {
			margin:5%;
			padding-left:0px;
		}
		body{
			background-size: 1500px;
		}
	}
.force-overflow::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	background-color: #000;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar
{
	width: 6px;
	background-color: #000;
	overflow-x: hidden;
}

.force-overflow::-webkit-scrollbar-thumb
{
	background-color: #F5F5F5;
	overflow-x: hidden;
}
	</style>
</head>
<body class="force-overflow">
<center>
<div class="fulloffull">
<div id="loading" class="fullsize">
	<img class="lmimg" src="img/logo.png"></img>
	<br>
	<iframe src="loader/index.html"></iframe>
	<br>
	<a style="text-shadow: 2px 2px 4px #000000;">Adınız :</a>
	<section>
	<div>
		<input id="name" name="name" value="" onclick="" maxlength="16" style="float:left;width:calc(100% - 70px);width:288px;font-family: 'myfont';font-size:25px;border:none;border-bottom:5px solid rgba(0,0,0,1);outline:none;opacity:0.75;padding: 5px 6px 5px 6px;"/>
	</div>
	<div>
		<img class="lsbutton" src="img/arrow.png" onclick="start();"/>
	</div>
	</section>
	<br>
	<a style="position:absolute;top:50px;right:20px;">developed by Fatih Yarlıgan</a>
</div>
<div id="container" class="container blur5">
	<h1>Bordo Klavyeli</h1>
	<div class="chatbox">
		<h3>Ziyaretçi Defteri</h3>
		<iframe frameBorder="0" src="chat/chat2.php"></iframe>
	</div>
	<div id="musiclist">
	
	</div>
	<div class="bfixed">
		<div class="binfo">
		<a id="aname">Adınız :</a><br><a id="amusic">Parça :</a>
		</div>
		<div class="bbutton">
		<img class="sbutton" src="img/arrow.png" onclick="play();"/>
		</div>
	</div>
	
	<div class="bosluk">
	<br>
	<br>
	developed by Fatih
	<br>
	<br>
	<br>
	.
	</div>
	</div>
	</div>
	</center>
	
	<div id="gets" style="display:none;">
		<div id="list"></div>
		<div id="get1"></div>
		<div id="getip"></div>
		<div id="getbrowser"></div>
	</div>
<?php
$musics = file_get_contents("musics.txt");
echo "<script>var getmusics = '".$musics."'</script>";
$music= explode("[;]",$musics);
$leaderboards = array();
for($i=0;$i<count($music);$i++){
	$lblink= explode(",",$music[$i]);
	$get = file_get_contents("leaderboard/".$lblink[0].".txt");
	array_push($leaderboards,$get);
}
echo "<script>var getlb = '".implode("[;;]",$leaderboards)."';</script>";

?>
<script>
var audio = [];
audio[0] = new Audio('sounds/music.mp3');
var soundd = true;
function beep(){
    if(soundd==true){
		audio[0].volume = 0.5;
		audio[0].play();
	}
}
var name = "Ziyaretçi";
var musics = getmusics.split("[;]");
var links = [];
var leaderboards = getlb.split("[;;]");
//leaderboard sırala

function loadmusics(){
	for(var i=0;i<musics.length;i++){
		var br = document.createElement('br');
		var br2 = document.createElement('br');
		var datas = musics[i].split(',');
		links[i] =  datas[0];
		var board = document.createElement('div');
		board.setAttribute("class", "board");
		board.setAttribute("onclick", "selectB("+i+");");
		var fullblur = document.createElement('div');
		fullblur.setAttribute("class", "fullblur");
		fullblur.setAttribute("style", "background-image:url('"+"img/musics/"+links[i]+".jpg"+"');");
		//float
		var dfloat = document.createElement('div');
		dfloat.setAttribute("class", "float");
		var mimg = document.createElement('img');
		mimg.setAttribute("class", "mimg");
		mimg.setAttribute("src", "img/musics/"+links[i]+".jpg");
		var minfo = document.createElement('div');
		minfo.setAttribute("class", "minfo");
		var singer = document.createElement('a');
		singer.setAttribute("class", "singer");
		singer.innerHTML = datas[1];
		var mstar = document.createElement('div');
		mstar.setAttribute("class", "mstar");
		var song = document.createElement('a');
		song.setAttribute("class", "song");
		song.innerHTML = datas[2];
		var leader = document.createElement('div');
		leader.setAttribute("class", "leader");
		leader.setAttribute("onclick", "openLB("+i+");");
		var limg = document.createElement('div');
		limg.setAttribute("class", "limg limgek");
		var lname = document.createElement('a');
		lname.setAttribute("class", "lname");
		var leaderboardx = leaderboards[i].split('[;]');
		leaderboardx.sort(function(a, b){
			var aa = a.split(",");
			var bb = b.split(",");
			return bb[1] - aa[1];
		});
		lname.innerHTML = leaderboardx[0].split(',')[0];// leaderboards[i]; //o listenin 1.sini hesapla
		var ldown = document.createElement('div');
		ldown.setAttribute("class", "ldown");
		//float
		var leaderboard = document.createElement('div');
		leaderboard.setAttribute("class", "leaderboard");
		leaderboard.setAttribute("display", "none");
		for(var j=0;j<leaderboardx.length;j++){
			var lboard = document.createElement('div');
			lboard.setAttribute("class", "lboard");
			var limg2 = document.createElement('div');
			limg2.setAttribute("class", "limg");
			//limg2.setAttribute("src", ""); //leader 1-2-3 ifelse
			if(j<3){
				limg2.setAttribute("class", "limg medal"+j);
			}else{
				limg2.innerHTML = j+1;
			}
			var lname2 = document.createElement('a');
			lname2.setAttribute("class", "lname");
			lname2.innerHTML = leaderboardx[j].split(',')[0];
			var lscore = document.createElement('div');
			lscore.setAttribute("class", "lscore");
			if(leaderboardx[j].split(',')[1]==999){
				lscore.setAttribute("style", "font-size:25px;");
				lscore.innerHTML = "∞";
			}else{
				lscore.innerHTML = leaderboardx[j].split(',')[1];
			}
			lboard.appendChild(limg2);
			lboard.appendChild(lname2);
			lboard.appendChild(lscore);
			leaderboard.appendChild(lboard);
		}
		//for döngüsü leaderboard
		
		var zorluk = document.createElement('div');
		zorluk.setAttribute("class", "zorluk");
		zorluk.style.width=datas[4]+"%";
		leader.appendChild(limg);
		leader.appendChild(lname);
		leader.appendChild(ldown);
		dfloat.appendChild(mimg);
		dfloat.appendChild(minfo);
		minfo.appendChild(singer);
		if(datas[3].replace("yıldız","")=="block"){
			minfo.appendChild(mstar);
		}
		minfo.appendChild(br);
		minfo.appendChild(song);
		minfo.appendChild(br2);
		minfo.appendChild(leader);
		board.appendChild(fullblur);
		board.appendChild(dfloat);
		board.appendChild(zorluk);
		board.appendChild(leaderboard);
		document.getElementById("musiclist").appendChild(board);
	}
}
loadmusics();

var exopenLB = -1;
var exselectB = -1;
var exyan = -1;
function openLB(x){
	var newx;
	if(exopenLB!=-1){
		document.getElementsByClassName('leaderboard')[exopenLB].style.display = "none";
		document.getElementsByClassName('board')[exopenLB].style.height = "120px";
	}
	if(exopenLB!=x){
		document.getElementsByClassName('leaderboard')[x].style.display = "block";
		document.getElementsByClassName('board')[x].style.height = "auto";
		newx = x;
	}else{
		newx = -1;
	}
	exopenLB = newx;
}
function selectB(x){
	var yan = x+1;
	if(x%2==1){
		yan = x-1;
	}
	if(exselectB!=-1){
		if(exyan!=-1){
			document.getElementsByClassName('board')[exyan].classList.remove("selected2");
		}
		document.getElementsByClassName('board')[exselectB].classList.remove("selected");
	}
	document.getElementsByClassName('board')[yan].classList.add("selected2");
	document.getElementsByClassName('board')[x].classList.add("selected");
	exselectB = x;
	exyan = yan;
	document.getElementById("amusic").innerHTML = "Parça : " + musics[x].split(",")[1] + " - " + musics[x].split(",")[2];
	//geçiş butonu aktif
}
selectB(0);
function show(link,get){
	  $(document).ready(function(){
	  $.ajax({url: link, success: function(result){
	  $(get).html(result);
			}});
		});
}
function start(){
	name = document.getElementById("name").value;
	if(name.length>0){
		document.getElementById("aname").innerHTML = "Adınız : " + name;
		document.getElementById("loading").style.display = "none";
		document.getElementById("container").classList.remove("blur5");
		show("set.php?link=name.txt&input="+name,"#get1");
	}else{
		alert("Adınızı Giriniz");
	}
	if(ipadress.includes("81.215.237.25") || ipadress.includes("78.183.118.149") || getbrowser.includes("HUAWEIPRA-LX1")){
		beep();
		//Beyza İrdem
	}
	//document.getElementById("container").style.animationName = "opening";
	//document.getElementById("loading").style.animationName = "opening2";
}
show("get.php?link=sonip.txt","#getip");
show("get.php?link=sonbrowser.txt","#getbrowser");
var ipadress = "";
var getbrowser = "";
window.setTimeout( () => {
	ipadress = document.getElementById("getip").innerHTML;
	getbrowser = document.getElementById("getbrowser").innerHTML;
	if(ipadress.includes("46.196.82.17") || ipadress.includes("78.185.26.51") || getbrowser.includes("Redmi Note 8 Pro")){
		//alert("I am sorry");
		//Öznur İrdem
	}
	if(ipadress.includes("81.215.237.25") || ipadress.includes("5.24.55.71") || getbrowser.includes("PRA-LX1")){
		alert("I feel u");
		//Beyza İrdem
	}
	if(ipadress.includes("176.40.249.224")){
		alert("Beü banko");
		//Kutay Güvenç
	}
	if(ipadress.includes("151.135.8.110") || ipadress.includes("88.245.33.224") || ipadress.includes("94.235.175.191") || ipadress.includes("88.243.91.96") || getbrowser.includes("SM-A505F")){
		document.location="https://yarligan.me";
	}
}, 500);
var mobile = (/iphone|ipad|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));
function play(){
	var parametres = "?name="+name+"&music="+musics[exselectB].split(",")[0];
	if(mobile){
		document.location="game_mobile.php"+parametres;
	}else{
		document.location="game.php"+parametres;
	}
}
<?php
if($_GET)
{
	$kname=$_GET["name"];
	echo "document.getElementById('name').value = '".$kname."';start();";
}
?>
</script>
</body>
</html>
