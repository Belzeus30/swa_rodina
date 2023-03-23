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
			<div class="form-popup" id="myForm">
				<form class="form-container" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
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
					<input type="submit" class="button" onclick="Open_Popup('open')">

					

				</form>
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

		$prijmy = $plat_1 + $plat_2 + $jedno_prijem + $investice;
		$vydaje_nezbytne = $najem + $inkaso + $jidlo + $telekomunikace;
		$vydaje_zbytne = $konicky + $vylety + $vzdelani;
		$dluhy = $ksplatka + $hsplatka;
		$zustatek = $prijmy - $vydaje_nezbytne - $vydaje_zbytne;
	}

	?>
	<div class="popup" id="popup">
		<button class="close" type="submit" onclick="Close_Popup()"><img src="https://cdn3.iconfinder.com/data/icons/rounded-monosign/142/delete-512.png" alt="" width="15x" height="15px"></button>
		<h3>Vyhodnocení</h3>
		<div>
			<p> Zůstatek: <?= $prijmy - $vydaje_nezbytne - $vydaje_zbytne ?></p>
		</div>
		<div class="popup-dluhy">
			<div class="dluhy">
				<h4>Dluh Kreditka</h4>
				<p><?= "ano" ?></p>
			</div>
			<div class="dluhy">
				<h4>Dluh Hypotéka</h4>
				<p><?= "ano" ?></p>
			</div>
		</div>
		<button class="button">edit</button>
		<div>
			<h4>Řešení</h4>
			<?php if ($zustatek < 0) : ?>
				<p>random řesšení</p>
			<?php elseif ($zustatek > 0) : ?>
				<p>random investice</p>
			<?php endif; ?>
		</div>
=======

	</div>
</body>

<script>

	$('.form-container').on("submit" ,function() {
		document.getElementById("popup").style.display = "block";
	})
	// When the user clicks on <div>, open the popup

	function Close_Popup() {
		document.getElementById("popup").style.display = "none";
	}
</script>


</html>