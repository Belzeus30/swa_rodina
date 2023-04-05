<!DOCTYPE html>
<html lang="cs">
<link rel="stylesheet" href="styles/style.css">

<head>
	<meta charset="UTF-8" />
	<title>SWA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<?php
require "Models/Database.php";
require "Models/Family.php";
require_once "config/init.php";


?>

<body>
	<h1>Rodina projekt</h1>
	<div class="column">
	<div class="inputbox">
		<div class="column middle">
			<div class="form-popup" id="myForm">
				<form id="form" class="form-container" method="post" action="parsers/save.php">
					<h1 id="zapis">Příjmy</h1>

					<table>
						<tr>
							<td>Plat</td>
							<td>2. plat</td>
							<td>Jednorázové příjmy</td>
							<td>Investice</td>
						</tr>
						<tr>

							<td><input type="Number" name="plat" required></td>
							<td><input type="Number" name="2plat"></td>
							<td><input type="Number" name="jedno_prijem"></td>
							<td><input type="Number" name="investice"></td>

						</tr>
					</table>
					<h1 id="zapis">
						Výdaje
					</h1>

					<h3>Nezbytné</h3>

					<table>
						<tr>
							<td>Nájem/Daň</td>
							<td>Voda+Elektřina</td>
							<td>Jídlo</td>
							<td>Telekomunikace</td>
						</tr>
						<tr>

							<td><input type="Number" name="najem"></td>
							<td><input type="Number" name="inkaso"></td>
							<td><input type="Number" name="jidlo"></td>
							<td><input type="Number" name="telekomunikace"></td>
						</tr>
					</table>
					<h3>
						Zbytné
					</h3>
					<table>
						<tr>
							<td>Koníčky</td>
							<td>Výlety+Zábava+dárky</td>
							<td>Vzdělání</td>
						</tr>
						<tr>
							<td><input type="Number" name="konicky"></td>
							<td><input type="Number" name="vylety"></td>
							<td><input type="Number" name="vzdelani"></td>
						</tr>
					</table>

					<h1 id="zapis">
						Dluhy
					</h1>
					<table>
						<tr>
							<td>Kreditka-celkový dluh</td>
							<td>Kreditka-splátka</td>
							<td>Hypotéka-celkem</td>
							<td>Hypotéka-splátka</td>
						</tr>
						<tr>

							<td><input type="Number" name="kcelkem"></td>
							<td><input type="Number" name="ksplatka"></td>
							<td><input type="Number" name="hcelkem"></td>
							<td><input type="Number" name="hsplatka"></td>
						</tr>
					</table>
					<input type="submit" class="button" id="submit">
				</form>
			</div>
		</div>
	</div>
</div>
<div class="column">
<h1>ano</h1>	
<p></p>
</div>
	<?php


/*
	$prijmy t_1 + $plat_2 + $jedno_prijem + $investice;
	$vydaje_nezbytne == $pla $najem + $inkaso + $jidlo + $telekomunikace;
	$vydaje_zbytne = $konicky + $vylety + $vzdelani;
	$dluhy = $ksplatka + $hsplatka;
	$zustatek = $prijmy - $vydaje_nezbytne - $vydaje_zbytne;
*/

	?>
</body>




</html>