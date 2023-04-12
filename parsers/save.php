<?php
require_once "../Models/Database.php";
require_once "../Models/Family.php";
require_once "../config/init.php";
var_dump($_POST["name"]);
$Family->name = isset($_POST['name']) ? $_POST['name'] : "";
$Family->plat_1 = isset($_POST['plat']) ? intval($_POST['plat']) : 0;
$Family->plat_2 = isset($_POST['2plat']) ? intval($_POST['2plat']) : 0;
$Family->jedno_prijem = isset($_POST['jedno_prijem']) ? intval($_POST['jedno_prijem']) : 0;
$Family->investice = isset($_POST['investice']) ? intval($_POST['investice']) : 0;
$Family->najem = isset($_POST['najem']) ? intval($_POST['najem']) : 0;
$Family->inkaso = isset($_POST['inkaso']) ? intval($_POST['inkaso']) : 0;
$Family->jidlo = isset($_POST['jidlo']) ? intval($_POST['jidlo']) : 0;
$Family->telekomunikace = isset($_POST['telekomunikace']) ? intval($_POST['telekomunikace']) : 0;
$Family->konicky = isset($_POST['konicky']) ? intval($_POST['konicky']) : 0;
$Family->vylety = isset($_POST['vylety']) ? intval($_POST['vylety']) : 0;
$Family->vzdelani = isset($_POST['vzdelani']) ? intval($_POST['vzdelani']) : 0;
$Family->kcelkem = isset($_POST['kcelkem']) ? intval($_POST['kcelkem']) : 0;
$Family->ksplatka = isset($_POST['ksplatka']) ? intval($_POST['ksplatka']) : 0;
$Family->hcelkem = isset($_POST['hcelkem']) ? intval($_POST['hcelkem']) : 0;
$Family->hsplatka = isset($_POST['hsplatka']) ? intval($_POST['hsplatka']) : 0;
var_dump($Family->name);
$Family->create();

//header("Location: ../index.php");

?>