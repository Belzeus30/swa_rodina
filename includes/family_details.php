<?php 
$selected_id=isset($_GET['id'])?$_GET['id']:"";
var_dump($selected_id);
$Family->id = $selected_id;
$selected_family=$Family->get_one();
var_dump($selected_family);




?>

<div id="family-detail">
    <div>
        <h3><?=$selected_family['name']?> Jmeno</h3>
        <button onclick="Edit_Family(<?=$selected_family['ID']?>)">Upravit</button>
        <button onclick="Close_detail()">Zavřít</button>
        <button onclick="Delete_Family(<?=$selected_family['ID']?>)" >smazat</button>
    </div>


</div>