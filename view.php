<?php
session_start();
if(!isset($_SESSION['email'])){
	header('location:login.php');
}
include_once'crud.php';
$crud=new crud();

$query="SELECT * FROM clintinfo ORDER BY id DESC";
$result=$crud->getdata($query);
?>
<style>
.add{
	font-size:20px;
	color:white;
}
.add a{
	text-decoration:none;
}
.menu td{
	text-align:center;
}
</style>
<table border="1">
 <tr class="menu">
 <td>Name </td>
 <td>Id Number  </td>
 <td>Department</td>
 <td>Phone Number </td>
  <td>Action </td>
 </tr>
 
 <?php
  foreach($result as $res){
	  echo "<tr>";
      echo "<td>" .$res['first_name']. "</td>";
	  echo "<td>" .$res['last_name']. "</td>";
	  echo "<td>" .$res['company_name']. "</td>";
	  echo "<td>" .$res['phone']. "</td>";
	  echo "<td><a href='edit.php?id=$res[id]'>edit</a> | <a href='delete.php?id=$res[id]'>delete</a></td>";
      echo"</tr>";	  
  }
 ?>



</table>
<p class="add"><a href="add.php">ADD MORE STUDENTS </a></p>
<h4> <a href="logout.php">logout </a></h4>