<?php 
require_once "../Models/Database.php";
require_once "../Models/Family.php";
require_once "../config/init.php";
$Family->id =isset($_POST['id'])? $_POST['id'] : header("Location: ../index.php");

$Family->delete();

header("Location: index.php")

?>