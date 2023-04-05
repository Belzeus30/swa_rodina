<!DOCTYPE html>
<html lang="cs">
<link rel="stylesheet" href="styles/style.css">

<head>
	<meta charset="UTF-8" />
	<title>SWA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

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
				<p>Váš zůstatek je (zustatek)</p>
				<p>Váš dluh na kreditce činí(kdluh), Vače hypotéka činí(hdluh)</p>
				<p>Pro úpravu přepište údaje a klikněte na tlačitko</p>
				<p>if zustatek vetsi nez (6*(plat_1+plat_2)) then napad na investice  else if (zustatek vetsi nez 0) schov si penize, else zvedni prijmy a sniz vydaje </p>
			</div>
		</div>
	</div>
	<?php

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$plat_1 = isset($_POST['plat']) ? intval($_POST['plat']) : 0;
		$plat_2 = isset($_POST['2plat']) ? intval($_POST['2plat']) : 0;
		$jedno_prijem = isset($_POST['jedno_prijem']) ? intval($_POST['jedno_prijem']) : 0;
		$investice = isset($_POST['investice']) ? intval($_POST['investice']) : 0;
		$najem = isset($_POST['najem']) ? intval($_POST['najem']) : 0;
		$inkaso = isset($_POST['inkaso']) ? intval($_POST['inkaso']) : 0;
		$jidlo = isset($_POST['jidlo']) ? intval($_POST['jidlo']) : 0;
		$telekomunikace = isset($_POST['telekomunikace']) ? intval($_POST['telekomunikace']) : 0;
		$konicky = isset($_POST['konicky']) ? intval($_POST['konicky']) : 0;
		$vylety = isset($_POST['vylety']) ? intval($_POST['vylety']) : 0;
		$vzdelani = isset($_POST['vzdelani']) ? intval($_POST['vzdelani']) : 0;
		$kcelkem = isset($_POST['kcelkem']) ? intval($_POST['kcelkem']) : 0;
		$ksplatka = isset($_POST['ksplatka']) ? intval($_POST['ksplatka']) : 0;
		$hcelkem = isset($_POST['hcelkem']) ? intval($_POST['hcelkem']) : 0;
		$hsplatka = isset($_POST['hsplatka']) ? intval($_POST['hsplatka']) : 0;

		$prijmy = $plat_1 * 12 + $plat_2 * 12 + $jedno_prijem + $investice;
		$vydaje_nezbytne = $najem * 12 + $inkaso * 12 + $jidlo + $telekomunikace;
		$vydaje_zbytne = $konicky + $vylety + $vzdelani;
		$dluhy = $ksplatka * 12 + $hsplatka * 12;
		$zustatek = $prijmy - $vydaje_nezbytne - $vydaje_zbytne - $dluhy;
		$kdluh = $kcelkem - $ksplatka * 12;
		$hdluh = $hcelkem - $hsplatka * 12;
	}

	?>
</body>




</html>