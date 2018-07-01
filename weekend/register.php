<?php
error_reporting(0);
mysql_connect('localhost','root','');
mysql_select_db("hackathon");
if(isset($_POST['submit']))
{
	?><script>
	alert("you have successfully signed up now please login");
	</script>
<?php
}
$name=$_POST['name'];
//echo $name;
$fname=$_POST['fname'];
//echo $fname;
$gender=$_POST['gender'];
//echo $gender;
$mob=$_POST['mobile'];
//echo $mob;
$dob=$_POST['dob'];
//echo $dob;
$mail=$_POST['email'];
//echo $mail;
$pass=$_POST['password'];
//echo $pass
$cpass=$_POST['cpassword'];
//echo $cpass;
$add=$_POST['address'];
$file_name=$_FILES['photo']['name'];
//echo $file_name;
$file_size=$_FILES['photo']['size'];

//echo $file_size;
$cap=rand(10000,99999);

if($pass==$cpass)
{$encrypted_password=md5($pass);
if($file_size<=500000){
$query="insert into weekend(name,fname,mobileno,email,pass,dob,gender,address,photo) values('$name','$fname','$mob','$mail','$encrypted_password','$dob','$add','$gender','$file_name')";
mysql_query($query);

	}
else{
	?>
	<script>
	alert("file size exceed");
	window.location.href="tanu.php"
	</script>
<?php
}
}

else{
?>
<script>
alert("password did not match");
window.location.href="tanu.php"</script><?php
}
?>
<html>
<head>
<style>
*{margin:0;
padding:0;
text-align:center;
 background-repeat:no-repeat;
 background-size:cover;
 }
#log{

	margin-right:50px;
	margin-left:20px;
	float:right;
}#log a button{
	height:30px;
	width:100px;
background-color:red;}
#contact{margin-top:100px;
color:blue;
text transform:uppercase;
}
form{
margin-top:50px;
}
#forms{
border:none;
outline:none;
border-bottom:1px solid grey;
color:black;
font-size:22px;
margin-top:50;
}
#name,#fname,#date,#email,#pass,#cpass,#file,#mob{

width:300;
height:30;
margin:10px;}
#submit
{
	width:150;
	height:30px;
	background-color:yellow;
margin:20px;
}
#add{
	height:70;
width:300;}
#reset
{
	width:150;
	height:30px;
	background-color:grey;
margin:20px;
}
#message{
	margin:20px;
}
#login
{width:150;
height:30px;
background-color:red;
margin:20px;
}
#home
{width:150;
height:30px;
background-color:green;
margin:20px;
}
</style>
</head>.
<body background="balloon.png">
<div id="contact">
<h1>
Say Hello
</h1>
<h2>
We Are Always Ready to Serve You!!!
</h2><div id="log">


</div>
</div>
<div id="forms">

<form method="post" action="register.php" enctype="multipart/form-data">
<fieldset>
<legend><font size="30px">Registration form</font></legend>
Name<input id="name" type="text" name="name" placeholder="your name" required/>
</br></br>

Father's Name<input id="fname" type="text" name="fname" placeholder="father name" required/>
</br></br>
Date of Birth<input id="date" type="date" name="dob" placeholder="date of birth"/>
<br></br>
Select Gender</br></br>
<input type="radio"  name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female
</select>
</br></br>
Address:
<textarea id="add" name="address"></textarea>
</br></br>
Email<input id="email" type="email" name="email" placeholder="email"/>
</br></br>
Mobile<input type="number" id="mob" name="mobile" placeholder="mobile"/>
</br></br>
Create Password<input id="pass" type="password" name="cpassword"/>
</br></br>
Confirm Password<input type="password" id="cpass" name="password"/>
</br></br>
Upload photo:
<input type="file" id="file" name="photo"/>

<br></br>
<input id="submit" type="submit" name="submit" value="register"/>
<input id="reset" type="reset" value="clear"/></fieldset>
</form></div>
<div id="message"><h2><font color="white">If you have already register please login by clicking on login button!!!</h2></div>
<a href="login1.php"><button id="login">LOGIN</button>
</a>

<a href="techplus.htm"><button id="home">HOME</button></a>
</body>
</html>