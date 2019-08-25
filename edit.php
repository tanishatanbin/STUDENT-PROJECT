<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}

include_once'crud.php';
$crud=new crud();
$id=$_GET['id'];
$query=("SELECT * FROM clintinfo WHERE id=$id");
$result=$crud->getdata($query);

foreach($result as $res){
	$id=$res['id'];
	$first=$res['first_name'];
	$last=$res['last_name'];
	$company=$res['company_name'];
	$phone=$res['phone'];
	
}

?>

<form action="edit.php" method="POST">
<input type="number" name="id" hidden value="<?php echo "$id" ;?>" />
<input type="text" name="first" placeholder="name"  value="<?php echo "$first" ;?>" />
<input type="text" name="last" placeholder="id"  value="<?php echo "$last" ;?>" />
<input type="text" name="company" placeholder="department"  value="<?php echo "$company" ;?>" />
<input type="text" name="phone" placeholder="number"  value="<?php echo "$phone" ;?>" />
<input type="submit" name="update" value="update">


<h4> <a href="logout.php">logout </a></h4>
</form>

<?php

if(isset($_POST['update'])){
	$id=$_POST['id'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	
	$result=$crud->execute("UPDATE clintinfo SET first_name='$first', last_name='$last', company_name='$company',phone='$phone' WHERE id=$id ");
   if($result){
	   header('location:view.php');
   }
}
?>








