<?php 

require "Models/Database.php";
require "Models/Family.php";

$db= new Database("b6tvkwyx0klomllwbt6l-mysql.services.clever-cloud.com","b6tvkwyx0klomllwbt6l","u2qzafc8q9vmh7sw","TvMU915nQqMY9qY8F1Q2");
$Family = new Family($db->connect());