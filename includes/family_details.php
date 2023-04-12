<?php 
include "../Models/Database.php";
include "../Models/Family.php";
include "../config/init.php";

$selected_id=isset($_POST['id'])?$_POST['id']:"";
var_dump($selected_id);
$Family->id = $selected_id;

$selected_family=$Family->get_one();
var_dump($selected_family);



?>

<div>
<div>
    <h3><?=$selected_family['name'] ?></h3>
</div>


</div>