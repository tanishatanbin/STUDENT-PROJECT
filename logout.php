<?php
session_start();
$_SESSION=array();
session_destroy();
if(!isset($_SESSION['emial'])){
	header('location:login.php');
}
?>