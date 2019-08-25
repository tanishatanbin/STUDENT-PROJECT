<?php
session_start();
?>

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
	margin-top:200px;
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
  <form action="registration.php" method="POST">
  <div class="form">
    <h1> Registration </h1>
	  <div class="name">
	    <input type="text" name="name" placeholder="Name"/>
		<input type="email" name="email" placeholder="Email"/>
		<input type="password" name="password" placeholder="Password"/>
	  </div>
	    <div class="submit">
<input type="submit" name="registration" value="Submit"/>
		</div>

  </div>
 </form>

</body>
</html>

<?php
include_once'crud.php';
$crud=new crud();
if(isset($_POST['registration'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$result=$crud->execute("INSERT INTO user (name,email,password) VALUES('$name','$email','$password')");
	if($result){
		header('location:add.php');
	}
}
?>




















