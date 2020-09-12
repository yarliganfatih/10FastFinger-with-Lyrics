<html>
<head>
<meta charset="utf-8" />
<title>Bordo Klavyeli - Demo</title>
<meta http-equiv="Content-Type" content="text/html; charset=isocial-8859-1" />
<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style>
body{
	font-family:"Times New Roman", Times, serif;
	font-size:large;
	background-color:black;
	color:white;
	background-image: url('img/div.png');
	background-repeat: no-repeat;
	background-position: center 5px;
	background-size: 1000px;
}
.container{
	width:950px;
	height:580px;
	padding-top:70px;
	float:initial;
	animation-name:opening;
	animation-duration: 2s;
	animation-fill-mode: forwards;
}
.container section{
	float:left;
	margin-top:5px;
	z-index:2;
	padding:10px;
}
.left{
	width:250px;
	height:500px;
}
.right{
	width:400px;
	height:500px;
}
.sec3{
	width:250px;
}
.sozler{
	width:100%;
	height:300px;
	margin-bottom:10px;
	overflow-y: scroll;
}
.inputs{
	width:100%;
	height:150px;
	resize: none;
	background: transparent;
	background: url('img/seffafb.png');
	color:white;
	outline:none;
}
.divs2{
	font-size:20px;
}
#score{
	color:#00ff00;
}
#yanlis{
	color:red;
}
#saniye{
	color:yellow;
}
#puan{
	color:#1e90ff;
}
.divscore{
	float:left;
	width:50%;
}
.fullw{
	width:100%;
}
.scoreboard{
	font-size:30px;
}
.board{
	width:100%;
	height:60px;
	max-height:60px;
	margin-bottom:10px;
	cursor:pointer;
}
#me{
	margin-bottom:20px;
}
.b0{
	float:left;
	width:100%;
}
.b1{
	margin:7.5px;
	width:45px;
	height:45px;
	border-radius:25px;
	border: 2px dashed white;
	float:left;
	font-size:27px;
}
.b2{
	font-size:20px;
	float:left;
	margin-top:15px;
}
.b3{
	margin:7.5px;
	margin-top:12.5px;
	width:60px;
	height:35px;
	border-radius:25px;
	border: 2px dashed #1874cd;
	font-size:20px;
	color:#1e90ff;
	float:right;
	border-radius:25px;
}
.b4 div{
	font-size:17px;
	width:40px;
	height:30px;
	float:right;
	border-radius:25px;
	margin:5px;
	margin-top:0px;
}
.b4{
	float:left;
	width:100%;
	animation-duration: 1s;
	animation-fill-mode: forwards;
}
.b5{
	border: 1.5px dashed #cd9b1d;
	color:#ffc125;
}
.b6{
	border: 1.5px dashed #cd2626;
	color:#ff3030;
}
.b7{
	border: 1.5px dashed #00cd00;
	color:#00ff00;
}
.musicboard{
	margin-top:0px;
	padding:5px;
}
#song{
	margin:5px;
}
audio{
	width:90%;
}
.mimg{
	width:70%;
	border-radius:15px;
}
.leaderboard{
	overflow-x: hidden;
	overflow-y: scroll;
	height:350px;
}
.footer{
	width:100%;
	opacity:0.7;
	padding:10px;
}


.btn-outline-light{
	height:30px;
	padding-top:2px;
	opacity:0.8;
}
.bordo1{
	width:100%;
	position:relative;
	top:-55px;
	left:15px;
	transform: rotate(25deg);
}
.fullsize{
	position:fixed;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
	width: 100%;
	height: 100%;
	z-index:101;
	text-align: center;
	vertical-align: middle;
	padding-top:30%;
	animation-duration: 0.5s;
	animation-fill-mode: forwards;
}
.fullsize img{
	width:300px;
}
.fullsize iframe{
	border:0;
}
.specialA{
	background-image: url('img/specialPurple.png');
}
.specialRed{
	background-image: url('img/specialRed.png');
}
.specialBlue{
	background-image: url('img/specialBlue.png');
}
.specialGreen{
	background-image: url('img/specialGreen.png');
}
.specialBrown{
	background-image: url('img/specialBrown.png');
}
.specialCyan{
	background-image: url('img/specialCyan.png');
}
@media only screen and (max-width: 1000px) {
  body {
    background-image: url('img/div2.png');
	background-size: 1500px;
	font-size:xx-large;
  }
  .container{
	width:100%;
	padding:0px;
  }
  .container section{
	width:100%;
	margin-left:0%;
	margin-right:0%;
	float:center;
  }
  .left{
	height:475px;
  }
  .left img{
	  width:300px;
  }
  .right{
  
  }
	#scoreboard{
		font-size:45px;
		background: url('img/seffafb.png');
	}
	.divs2{
		font-size:30px;
	}
	.divscore{
		width:20%;
		background: url('img/seffafb.png');
	}
	.board{
		height:90px;
		max-height:90px;
	}
	.b1{
		height:70px;
		width:70px;
		margin:10px;
		font-size:45px;
		border-radius:35px;
	}
	.b2{
		maqrgin-top:25px;
		font-size:40px;
	}
	.b3{
		height:50px;
		width:90px;
		margin:20px;
		font-size:30px;
		border-radius:25px;
	}
	.b4 div{
		font-size:25px;
		width:90px;
		height:45px;
		float:right;
		border-radius:30px;
		margin:10px;
		margin-top:0px;
	}
	.bordo1{
		width:100%;
		position:relative;
		top:0px;
		left:30px;
		transform: rotate(25deg);
		display:none;
	}
	.btn-outline-light{
		height:50px;
		padding-top:0px;
		opacity:0.8;
		font-size:25px;
	}
	.leaderboard{
		overflow-y: inherit;
		height:auto;
		opacity:0.8;
	}
	.musicboard{
		padding-top:10px;
		height:200px;
	}
	audio{
	}
}
#song{
	font-size:30px;
	border-radius:10px;
	margin-top:10px;
	padding-top:10px;
	border-bottom:1.5px solid gray;
}
.blur5::before{
}
.blur5 *{
  -webkit-filter: blur(5px);filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' ><filter id='blur5'><feGaussianBlur in='SourceGraphic' stdDeviation='5' /></filter></svg>#blur5");
  filter:blur(10px);
}
@keyframes opening {
  from{
	-webkit-filter: blur(30px);filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' ><filter id='blur5'><feGaussianBlur in='SourceGraphic' stdDeviation='5' /></filter></svg>#blur5");
	filter:blur(30px);
  }
  to{
	-webkit-filter: blur(5px);filter:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' ><filter id='blur5'><feGaussianBlur in='SourceGraphic' stdDeviation='5' /></filter></svg>#blur5");
	filter:blur(0px);
  }
}
@keyframes opening2 {
  from{
	opacity:1;
  }
  to{
	opacity:0;
  }
}
@keyframes openb4 {
  from{
	height:0px;
	opacity:0;
  }
  to{
	height:35px;
	opacity:1;
  }
}
@keyframes closeb4 {
  from{
	height:35px;
	opacity:1;
  }
  to{
	height:0px;
	opacity:0;
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
<div id="loading" class="fullsize">
<img class="mimg" src="img/logo.png"></img>
<br>
<iframe src="loader/index.html"></iframe>
<br>
<a>developed by Fatih</a>
</div>
<div id="container" class="container">
	<section class="left">
		<img id="mimg" class="mimg" src="img/logo.png" onclick="backindex();"></img>
		<div class="musicboard">
			<div id="song" class="name">Hayalet Sevgilim</div>
		<audio controls>
		  <source id="audios" src="mp3/İrem_-_Hayalet_Sevgilim.mp3" type="audio/mpeg">
			Tarayıcı MP3'ü desteklemiyor.
		</audio>
		</div>
		<div class="scoreboard">
			<div class="divscore" onclick="soundb();"><img id="soundb" class="soundb" style="width:45px;padding:2.5px;" src="img/soundon.png"/></div>
			<div class="divscore"><b id="score">0</b><b class="divs2">d</b></div>
			<div class="divscore"><b id="yanlis">0</b><b class="divs2">y</b></div>
			<div class="divscore"><b id="saniye">0</b><b class="divs2">s</b></div>
			<div class="divscore"><b id="puan">0</b><b class="divs2">d/dk</b></div>
		</div>
	</section>
	<section class="right">
		<div id="sozler" class="sozler force-overflow">
			
		</div>
		<textarea id="textbox" class="inputs force-overflow">
			
		</textarea>
		
	</section>
	<section class="sec3">
		<div id="me" onclick="openboard(-1);" class="board">
			<div class="b1">?</div>
			<div id="nick" class="b2">Nickname</div>
			<div id="nickx" class="b3">x</div>
		</div>
		<hr style="border-top: 1px dashed white;">
		<button type="button" class="btn btn-outline-light fullw" onclick="openboard(-2);">Liderlik Tablosu</button>
		<div id="leaderboard" class="leaderboard force-overflow">
		</div>
	</section>
	<a class="footer">developed by Fatih</a>
</div>
</center>
<div id="gets" style="display:none;">
<div id="music">
<?php 
if($_GET)
{
	$p=$_GET["music"];
	echo $p;
}else{
	echo "İrem_-_Hayalet_Sevgilim";
}
?>
</div>
<div id="name">
<?php 
if($_GET)
{
	$p=$_GET["name"];
	echo $p;
}else{
	echo "Ziyaretçi";
}
?>
</div>
<div id="getLB">Alfa,9,10,9,8[;]Beta,10,9,8,7[;]Fatih,15,2,2,2</div>
<div id="getsoz"></div>
<div id="komut"></div>
<div id="getip"></div>
<div id="getbrowser"></div>
</div>

<script type="text/javascript">
var text = "";
var words = [];
var sentence = [];
var specials = [];
var satir = [];
var soz = document.getElementById("sozler");
var music = "İrem_-_Hayalet_Sevgilim";
var name = "Player";
function loadmusic(){
	text = document.getElementById("getsoz").innerHTML;
	sentence = text.split("\n");
	console.log(sentence);
	var k=0;
	if(name.includes("Fatih") || name.includes("Beyza") || name.includes("B") || music.includes("Kürşat_Zengin_-_Kalp_Yolu")){
		
		/*
		if(music.includes("Vega_-_Beni_Kendinden_Kurtar")){
			var msg = document.createElement("a");
			msg.appendChild(document.createTextNode("Özledim"));
			msg.setAttribute("class", "specialA");
			soz.appendChild(msg);
			soz.appendChild(document.createElement("br"));
		}
		*/
	}
	for(var i=0;i<sentence.length;i++){
		var wofs = sentence[i].split(" ");
		console.log(wofs);
		for(var j=0;j<wofs.length;j++){
			if(!wofs[j].includes("[")){
				words.push(wofs[j]);
				var a = document.createElement("a");
				a.appendChild(document.createTextNode(words[k] + " "));
				if(wofs[0].includes("[")){
					var special = wofs[0].replace("[", "");
					special = special.replace("]", "");
					a.setAttribute("class", special);
					specials.push(k);
				}
				soz.appendChild(a);
				k++;
			}
		}
		satir.push(wofs.length);
		var br = document.createElement("br");
		soz.appendChild(br);
	}
	soz.getElementsByTagName("a")[0].style.color = "yellow";
	console.log(words);
}
function saveleaderboard(){
	var saniye = Number.parseFloat(salise/100).toFixed(2);
	var time3 = time2-time1;
	var input = name + "," + puan + "," + saniye + "," + yanlis + "," + score + ",Mobil," + time3;
	var txtbox = document.getElementById("textbox").innerHTML;
	show("saveLB.php?link="+music+"&input="+input+"&data="+txtbox,"#komut");
	document.getElementById("nick").innerHTML = name + " - Kaydedildi";
	loadleaderboard();
}
function loadleaderboard(){
	var lists = document.getElementById('getLB').innerHTML.split("[;]");
	lists.sort(function(a, b){
		var aa = a.split(",");
		var bb = b.split(",");
		return bb[1] - aa[1];
		});
	for(var i=0;i<lists.length;i++){
		console.log(lists[i]);
		var datas = lists[i].split(",");
		var board = document.createElement('div');
		board.setAttribute("onclick", "openboard("+i+");");
		board.setAttribute("class", "board");
		var b = [];
		for(var j=0;j<8;j++){
			b[j] = document.createElement('div');
			b[j].setAttribute("class", "b"+j);
		}
		b[1].appendChild(document.createTextNode(i+1));
		for(var j=0;j<5;j++){
			var z = j+2;
			if(j>1){
				z++;
			}
			b[z].appendChild(document.createTextNode(datas[j]));
		}
		for(var j=1;j<7;j++){
			var z = j;
			var k = 0;
			if(j>3){
				z++;
				k=4;
			}
			b[k].appendChild(b[z]);
		}
		board.appendChild(b[0]);
		board.appendChild(b[4]);
		document.getElementById("leaderboard").appendChild(board);
	}
	var beret = document.createElement('img');
	beret.setAttribute("class", "bordo1");
	beret.setAttribute("src", "img/beret.png");
	document.getElementById("leaderboard").getElementsByClassName("b1")[0].appendChild(beret);
	openboard(-1);
}
function show(link,get){
	  $(document).ready(function(){
	  $.ajax({url: link, success: function(result){
	  $(get).html(result);
			}});
		});
}
var audio = [];
audio[0] = new Audio('sounds/true.mp3');
audio[1] = new Audio('sounds/false.mp3');
audio[2] = new Audio('sounds/finish.mp3');
var soundd = true;
function beep(x){
    if(soundd==true){
		audio[x].volume = 0.5;
		audio[x].play();
	}
}
function backindex(){
	document.location='index.php?name='+name;
}
function soundb(){
	var exsound = soundd;
	if(exsound){
		soundd = false;
		document.getElementById("soundb").src = "img/soundoff.png";
	}else{
		soundd = true;
		document.getElementById("soundb").src = "img/soundon.png";
	}
}
function openboard(x){
	var b4 = document.getElementsByClassName('b4');
	for(var i=0;i<b4.length;i++){
		document.getElementsByClassName('b4')[i].style.animationName = "closeb4";
		//b4[i].style.display = "none";
	}
	if(x!=-1){
		//b4[x].style.display = "inline";
		if(x==-2){
			for(var i=0;i<b4.length;i++){
				document.getElementsByClassName('b4')[i].style.animationName = "openb4";
				//b4[i].style.display = "none";
			}
		}else{
			document.getElementsByClassName('b4')[x].style.animationName = "openb4";
		}
	}
}
var itext = 0;
var textbox = document.getElementById("textbox");
var time;
var salise = 0;
document.getElementById("textbox").value="";
var score = 0;
var yanlis = 0;
var puan = 0;
var regex = /[.,?;')(-]/gi;
var atsatir = 1;
var wofsatir = 1;
var time1;
var time2;
textbox.addEventListener("keyup", function(event) {
    event.preventDefault();
	var twords = textbox.value.split(/[ \n]/);
	if(words[itext].toLowerCase().includes(twords[itext].toLowerCase())){
		soz.getElementsByTagName("a")[itext].style.backgroundColor = "yellow";
		if(!specials.includes(itext)){
			soz.getElementsByTagName("a")[itext].style.color = "black";
		}else{
			soz.getElementsByTagName("a")[itext].style.color = "yellow";
		}
	}else{
		soz.getElementsByTagName("a")[itext].style.backgroundColor = "orange";
		if(!specials.includes(itext)){
			soz.getElementsByTagName("a")[itext].style.color = "black";
		}else{
			soz.getElementsByTagName("a")[itext].style.color = "orange";
		}
	}
    if (event.keyCode === 13 || event.keyCode === 32) {
		if(itext+2 >= twords.length){
			if(twords[twords.length-2].toLowerCase().replace(regex, "") == words[itext].toLowerCase().replace(regex, "")){
				score++;
				beep(0);
				console.log(twords[itext] + " == " + words[itext]);
				soz.getElementsByTagName("a")[itext].style.color = "#00ff00";
				if(twords[twords.length-2].toLowerCase().replace(regex, "") != words[itext] && words[itext] == twords[itext]){
					score = score + 0.5;
				}
				document.getElementById("score").innerHTML = score;
			}else{
				yanlis++;
				beep(1);
				document.getElementById("yanlis").innerHTML = yanlis;
				console.log(twords[itext] + " != " + words[itext]);
				soz.getElementsByTagName("a")[itext].style.color = "red";
			}
			if(itext==0){
				time = setInterval(timer, 10);
				time1 = Date.now();
			}else if(itext==words.length-1){
				clearInterval(time);
				time2 = Date.now();
				saveleaderboard();
				if(music.includes("Kürşat_Zengin_-_Kalp_Yolu")){
					if(ipadress.includes("78.183.105.64") || ipadress.includes("81.215.237.25") || ipadress.includes("5.24.55.71") || getbrowser.includes("PRA-LX1")){
						alert("Ben de seninle hayırlısını diliyorum");
					//Beyza İrdem
					}
				}
				beep(2);
				window.setTimeout( () => {
					show("get.php?link=leaderboard/"+music+".txt","#getLB");
					window.setTimeout( () => {
						document.getElementById("leaderboard").innerHTML = "";
						loadleaderboard();
					}, 1500);
				}, 500);
			}
			soz.getElementsByTagName("a")[itext].style.backgroundColor = "transparent";
			itext++;
			soz.getElementsByTagName("a")[itext].style.backgroundColor = "yellow";
			if(!specials.includes(itext)){
				soz.getElementsByTagName("a")[itext].style.color = "black";
			}else{
				soz.getElementsByTagName("a")[itext].style.color = "yellow";
			}
			if(wofsatir>=satir[atsatir-1]){
				atsatir++;
				console.log(atsatir);
				wofsatir=0;
				if(atsatir>5){
					soz.scrollTop += 50;
				}
			}
			wofsatir++;
		}else{
			alert("Kopyala-yapıştırın mucidi hakkın rahmetine kavuştu, Burada benim kurallarım geçer :) Skor:-1");
			acore--;
			document.getElementById("score").innerHTML = score;
		}
    }
});
//document.getElementById("sozler").innerHTML = text;

function timer(){
	salise++;
	var saniye = Number.parseFloat(salise/100).toFixed(2);
	if(saniye>999.99){
		saniye = Number.parseFloat(saniye).toFixed(1);
	}
	document.getElementById("saniye").innerHTML = saniye;
	puan = Number.parseFloat(score/saniye*60).toFixed(2);
	document.getElementById("puan").innerHTML = puan;
}

function start(){
	name = document.getElementById("name").innerHTML;
	music = document.getElementById("music").innerHTML;
	show("get.php?link=leaderboard/"+music+".txt","#getLB");
	show("get.php?link=sozler/"+music+".txt","#getsoz");
	//document.getElementById("mimg").src = "img/musics/"+music+".jpg";
	document.getElementById("audios").src = "mp3/"+music+".mp3";
	document.getElementById("song").innerHTML =  music.replace("_", " ").replace("_", " ").replace("_", " ").replace("_", " ").replace("_", " ");
	document.getElementById("nick").innerHTML = name;
	window.setTimeout( () => {
		document.getElementById("loading").style.animationName = "opening2";
	  }, 1500);
	window.setTimeout( () => {
		loadleaderboard();
		loadmusic();
		document.getElementById("loading").style.display = "none";
	  }, 2000);
}
start();

show("get.php?link=sonip.txt","#getip");
show("get.php?link=sonbrowser.txt","#getbrowser");
var ipadress = "";
var getbrowser = "";
window.setTimeout( () => {
	ipadress = document.getElementById("getip").innerHTML;
	getbrowser = document.getElementById("getbrowser").innerHTML;
}, 500);
</script>

</body>
</html>