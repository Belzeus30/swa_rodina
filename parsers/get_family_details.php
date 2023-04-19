<?php
$id = isset($_POST['id'])?$_POST['id']:"";
echo $id; 
header("location: ../index.php?id=".$id)
?>