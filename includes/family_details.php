<?php 
include "../Models/Database.php";
include "../Models/Family.php";
include "../config/init.php";

$selected_id=isset($_POST['id'])?$_POST['id']:"";
$Family->id = $selected_id;
$selected_family=$Family->get_one();




?>

<div id="family-detail">
    <div>
        <h3><?=$selected_family['name'] ?></h3>
        <button onclick="Edit_Family(<?=$selected_family['ID']?>)">Upravit</button>
        <button onclick="Close_detail()">Zavřít</button>
        <button onclick="Delete_Family(<?=$selected_family['ID']?>)" >smazat</button>
    </div>


</div>