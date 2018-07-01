<?php
session_start();
if(!isset($_SESSION['name']))

header('location:http://localhost/weekend/login1.php');

?><html>
<head>
<style>
body{
	background-color:snow;
}
#logo{
	float:left;
	margin-left:50px;
	outline-offset:20px;
	border:1px solid black;
	

}

h1{
text-align:center;

color:red;}
#user{
margin-left:300px;

}
h2{
text-align:center;
}
#offer{
	margin-left:300px;
	width:800;
	
}

#container{
box-shadow:4px 4px 4px 4px rgba(0,0,0,0.4);
margin:auto;
text-align:center;
padding:5px;
background-color:grey;
border:2px solid black;
}
#info{
font-size:50px;

text-align:center;
padding:12px;
background-color:#fff;
border:2px solid black;
box-shadow:4px 4px 4px 4px rgba(0,0,0,0.4);}
#offer img{
	height:200;
	width:300;
}
#python,#c,#excel,#java,#android,#digital{
	float:left;
	height:400;
	width:300;
	margin:50px;
	text-align:center;
	box-shadow:4px 4px 4px 4px rgba(0,100,100,0.4);
background-color:lavender;}

button{
	height:30px;
	width:100px;

	margin-top:20px;
	
}
	
#details h2{
color:red;
text-align:center;}
#more h2{
color:blue;
text-align:center;

}
#more{
float:left;
width:1300;}	
</style>


</head>
<body>

<div id="logo">

<img src="img6.png"></div>
<div id="thought">
<h1>
PERFORMANCE IS OUR BUSSINESS <br>
And <br>QUALITY OUR FOUNDATION</h1></br></br>
</div>
<div id="user">
<i><b><marquee behaviour="scroll"direction="RIGHT" font-size="+3" onmouseover="stop()" onmouseout="start()" scrollamount="20"><font color="green" size="5">
<h2>hello <?php echo $_SESSION['name']?>
<br>
<a href="logout.php">Logout</a></marquee>
</font>

 
</div>
<div id="offer">

<h1>
SURPRISE!!!</H1>
<font color="purple"><H2>We Offer <b> 40% OFF</b> on Admission before <b>10 JULY</b></br>
SO Guys Hurry Up !!!!</br></font>
<img src="it.jpg"></br>
COUNTDOWN has started....
<div id="count">
<table id="container" cellpadding="5px">
<tr id="info">

<td id="days"></td>

<td id="hrs"></td>
<td id="min"></td>
<td id="sec"></td>
</tr>
<tr>
<td>days</td>
<td>hrs</td>
<td>min</td>
<td>sec</td>
</tr>


</table>
<script>
function countdown()
{
var today=new Date();
var eventdate=new Date("july 11,2018 00:00:00");
var currenttime=today.getTime();
var eventtime=eventdate.getTime();
var realtime=eventtime-currenttime;
var sec=Math.floor(realtime/1000);
var min=Math.floor(sec/60);
var hrs=Math.floor(min/60);
var days=Math.floor(hrs/24);
hrs%=24;
min%=60;
sec%=60;
hrs=(hrs<10)?"0"+hrs:hrs;
min=(min<10)?"0"+min:min;
sec=(sec<10)?"0"+sec:sec;

document.getElementById("days").innerHTML=days;
document.getElementById("hrs").innerHTML=hrs;
document.getElementById("min").innerHTML=min;
document.getElementById("sec").innerHTML=sec;
setTimeout(countdown,1000);

}
countdown();
</script>

</div>
</div>
<div id="details">
<h2>
Our company provide you various courses under summer training  programme with a</br> certification too!!!</h2>
</div>
<div id="python">
<img src="python.png">
<button>Know More</button></br>
<h3><a href="python ToC.pdf" download>Download Table Content</a></h3>
</div>
<div id="c">
<img src="c.png">
<button>Know More</button></br>
<h3><a href="cToC.pdf" download>Download Table Content</a></h3>
</div>
<div id="java">
<img src="java.png">

<button>Know More</button></br>
<h3><a href="java ToC.pdf" download>Download Table Content</a></h3>
</div>
<script>
</script>


<div id="digital">
<img src="digital.png">
<button>
Know More
</button></br>
<h3><a href="digitalmarketing ToC.pdf" download>Download Table Content</a></h3>
</div>



<div id="excel">
<img src="excel.png">
<button>Know More</button></br>
<h3><a href="excel ToC.pdf" download>Download Table Content</a></h3>
</div>
<div id="android">
<img src="android.png">

<button>Know More</button></br>
<h3>
<a href="androidToC.pdf" download>Download Table Content</a></h3>
</div>
</br>
<div id="more">
<h2>
Along with any of our courses we provide our all our <b><i>study material </b>/<i>about all these courses</br>and a <b><i>free personality development one week trainning</b></i>!!!
<h1>
SO HURRY !!!!</h1>
<h2>Limited seats are available.....
</h2>
<h4>
<font color="grey">For more information and getting registerd to any courses contact us at anubha@gmail.com or at our official address West pratap nagar, binplus office delhi,india...</font></h4>
</div>












</body>
</html>