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
<body>
	<h1>Rodina projekt</h1>
	<div class="inputbox">
		<div class="column middle">
			<div class="table">
				<h1 id="zapis">
					Příjmy
				</h1>
				<table>
					<tr>
						<td>Plat(za měsíc)</td>
						<td>2. plat(za měsíc)</td>
						<td>Jednorázové příjmy(celkem)</td>
						<td>Investice(celkem)</td>
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
						<td>Nájem/Daň(za měsíc)</td>
						<td>Voda+Elektřina(za měsíc)</td>
						<td>Jídlo(celkem)</td>
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
						<td>Koníčky-celkem</td>
						<td>Výlety+Zábava+dárky-celkem</td>
						<td>Vzdělání-celkem</td>
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
						<td>Kreditka-dlužná částka</td>
						<td>Kreditka-měsíční splátka</td>
						<td>Hypotéka-dlužná částka</td>
						<td>Hypotéka-měsíční splátka</td>
					</tr>
					<tr>

						<td><input type="Number" name="kcelkem"></td>
						<td><input type="Number" name="ksplatka"></td>
						<td><input type="Number" name="hcelkem"></td>
						<td><input type="Number" name="hsplatka"></td>
					</tr>
				</table>
				<input type="submit" class="button" id="submit">
				
			</div>
		</div>
	</div>
	<div class="outputbox">
		<div class="column middle">
			<div class="table">
				<h1 id="zapis">
					Zůstatek
				</h1>
			</div>
		</div>
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