<?php
session_start();
error_reporting(0); //To ignore the unwanted errors
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,"hackathon");

?>
<html>
<head>
<style>
*{background-color:limegreen;

}
#login{
	width:300;
	padding:50px;
margin-top:20;
margin-left:500;
border:1px solid white;
box-shadow:4px 4px 4px 4px rgba(0,0,0,0.4);}
#pass_word , #user_name,#cap{
	height:30px;
	padding:5px;
	width:300px;}
	img{
		height:200;
	width:300;
	border:1px solid black;
	}
	#log_in{
		padding:auto;
		width:300;
		height:35px;
		margin-top:10px;
	background-color:red;}
	#registers{
		padding:auto;
		width:300;
		height:35px;
		margin-top:10px;
	background-color:yellow;}
	h1{
		color:blue;
		margin-left:500;
	margin-top:50;}
	#image{
		height:50px;
		width:100px;
	
	}
</style>
</head>
<body>
<h1>TECHPLUS LOGIN FORM!!!</h1>
<div id="login">
<img src="know.png">
<form action="login1.php" method="post">
<table>
<tr>
<td>
USERNAME<br><input type="text" id="user_name" name="name"/>
</td></tr>
<tr>

<td>PASSWORD<br><input type="password" id="pass_word" name="pass"/>
</td>
</tr>
<tr><td>
CAPTCHA<br><input id="cap" type="text" name="code"></td>
</tr></tr><td>
<img id="image" src="image.php">
</td>
</tr>
<tr>
<td><input type="submit" value="login" name="login" id="log_in"/>
</td>
</tr>
<tr><td>
<a href="register.php"><input type="button" value="register" id="registers"/></a>
</table>
</form>


<?php

$username=$_POST['name'];
$password=$_POST['pass'];
$code=$_SESSION['code'];
$encrypted_password=md5($password);



if($_POST['pass'] && $_POST['name'] && $_POST['code']) {

$query="select * from weekend WHERE name='$username' && pass='$encrypted_password'";
$query_run=mysqli_query($con,$query);
//echo mysqli_num_rows($query_run);
if(mysqli_num_rows($query_run)>0 && $_POST['code']==$code)
	
{?><script>
alert("you have succesfully loged in as <?php echo $username?>");
//window.location.href="login1.php"</script>

<?php
$_SESSION['name']=$username;
header('location:http://localhost/weekend/techplussummertraining.php');

}
else
{?><script>
alert("invalid username,password or captcha");
window.location.href="login1.php"</script>
<?php
}
}
?>
</div>
</body>
</html>
