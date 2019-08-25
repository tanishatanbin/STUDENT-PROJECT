<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}
?>

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
  <form action="add.php" method="POST">
  <div class="form">
    <h1> Get started for CV </h1>
	  <div class="name">
	    <input type="text" name="first" placeholder="Name"/>
		<input type="text" name="last" placeholder="Id Number"/>
		<input type="text" name="company" placeholder="Department"/>
		<input type="text" name="phone" placeholder="Phone Number"/>
	  </div>
	    <div class="submit">
	<input type="submit" onclick="on()" name="submit" value="Submit"/>
		<p class="view"> <a href="view.php">Go To View Page </a></p>
		<h6 class="view"> <a href="logout.php">logout </a></h6>
		</div>

  </div>
 </form>
 <script>
function on(){

	alert("Add successfull");

}
</script>
</body>
</html>
<?php
include_once'crud.php';
$crud=new crud();

if(isset($_POST['submit'])){
	$first=$_POST['first'];
	$last=$_POST['last'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	
	$result=$crud->execute("INSERT INTO clintinfo(first_name,last_name,company_name,phone) VALUES('$first','$last','$company','$phone')");
}
?>



