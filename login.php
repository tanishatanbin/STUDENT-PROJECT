<html>
<head>
<title>  add student </title>
</head>
<style>


.form{
	height:500px;
	width:500px;
	background:#756868;
	margin-left:450px;
	margin-top:50px;
	
}
.form h1{
	color:white;
	text-align:center;
	padding-top:20px;
	font-family:fantasy;
}
.name{
	height:50px;
	width:400px;
	margin-left:50px;

}
.name input{
	height:50px;
	width:400px;
	margin-top:5px;
	font-size:20px;
	padding-left:10px;
	border-radius:5px;
    overflow:hidden;
}
.name input::placeholder{
	font-size:20px;
	color:black;
	padding-left:10px;
	font-family:fantasy;
}
.submit input{
	height:50px;
	width:400px;
	margin-top:100px;
	font-size:20px;
	margin-left	:50px;
	border-radius:5px;

}
.view{
	font-size:20px;
	margin-left:160px;
	
	text-decoration none;
}
.view a{
	text-decoration:none;
	color:white;
}

</style>
<body class="body">
  <form action="login.php" method="POST">
  <div class="form">
    <h1> LOG IN </h1>
	  <div class="name">
		<input type="email" name="email" placeholder="Email"/>
		<input type="password" name="password" placeholder="Password"/>
	  </div>
	    <div class="submit">
		<input type="submit" name="login" value="login"/>
		</div>
		<h1> <a href="registration.php"> Registration first</a></h1>

  </div>
 </form>

</body>
</html>

<?php
session_start();
include_once'crud.php';
$crud=new crud();
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result=$crud->getdata($query);
	if($result){
	foreach($result as $res){
		$email=$res['email'];
		$password=$res['password'];	
	}
	$_SESSION['email']=$email;
	$_SESSION['password']=$password;
		header('location:add.php');
}
else{
	echo"login error";
}
}

?>

















