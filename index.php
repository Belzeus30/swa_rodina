<!DOCTYPE html>
<html lang="cs">
<link rel="stylesheet" href="styles/style.css">
<head>
	<meta charset="UTF-8"/>	
	<title>SWA</title>
</head>
<body>
	<h1>Rodina projekt</h1>
	<div class="inputbox">
		<div class="column middle"> 
			<div class="form-popup" id="myForm">
				<form  class="form-container" method="" onsubmit="return myFunction();">
					<h1 id="zapis" >Příjmy</h1>
					<table>
						<tr>
							<td>Plat</td>
							<td>2. plat</td>
							<td>Jednorázové příjmy</td>
							<td>Investice</td>
						</tr>
						<tr>
							<td><input type="text" name="plat" required></td>
							<td><input type="text" name="plat2"></td>
							<td><input type="text" name="jedno_prijem"></td>
							<td><input type="text" name="investice"></td>
						</tr>
					</table>
					<h1 id="zapis">
						Výdaje
					</h1>
					<h3 >Nezbytné</h3>
					<table>
						<tr>
							<td>Nájem/Daň</td>
							<td>Voda+Elektřina</td>
							<td>Jídlo</td>
							<td>Telekomunikace</td>
						</tr>
						<tr>
							<td><input type="text" name="najem"></td>
							<td><input type="text" name="inkaso"></td>
							<td><input type="text" name="jidlo"></td>
							<td><input type="text" name="telekomunikace"></td>
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
								<td><input type="text" name="konicky"></td>
								<td><input type="text" name="vylety"></td>
								<td><input type="text" name="vzdelani"></td>
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
							<td><input type="text" name="kcelkem"></td>
							<td><input type="text" name="ksplatka"></td>
							<td><input type="text" name="hcelkem"></td>
							<td><input type="text" name="hsplatka"></td>
						</tr>
					</table>
					<input type="submit" class="button" onclick="Event.preventDefault()">
				</form>
			</div>
		</div>
	</div>
	<div class="popup" >
		<div class="column middle">
			<span class="popuptext" id="myPopup">
				<h1>Roční zůstatky</h1>
				<p id="result">Zůstatek= </p>
				<button id='subButton' onclick="Zustatek()" type='button'>Vypočti</button>


			</span>
		</div>

	</div>
</body>

<script>
// When the user clicks on <div>, open the popup
function myFunction() {
	Event.preventDefault()
	let popup = document.getElementById("myPopup");
	popup.classList.toggle("show");
	Debug.Log("yes");

}

</script>
<?php
if($_SERVER['REQUEST_METHOD']=='post') {
	$plat1 = isset($_POST['plat'])?($_POST['plat']):0;
	$plat2 = isset($_POST['plat2'])? ($_POST['plat2']):0;
	$jedno_prijem = isset($_POST['jedno_prijem'])? ($_POST['jedno_prijem']):0;
	$investice = isset($_POST['investice'])? ($_POST['investice']):0;
	$najem = isset($_POST['najem'])? ($_POST['najem']):0;
	$inkaso = isset($_POST['inkaso'])? ($_POST['inkaso']):0;
	$jidlo = isset($_POST['jidlo'])? ($_POST['jidlo']):0;
	$telekomunikace = isset($_POST['telekomunikace'])? ($_POST['telekomunikace']):0;
	$konicky = isset($_POST['konicky'])? ($_POST['konicky']):0;
	$vylety = isset($_POST['vylety'])? ($_POST['vylety']):0;
	$vzdelani = isset($_POST['vzdelani'])? ($_POST['vzdelani']):0;
	$kcelkem = isset($_POST['kcelkem'])? ($_POST['kcelkem']):0;
	$ksplatka = isset($_POST['ksplatka'])? ($_POST['ksplatka']):0;
	$hcelkem = isset($_POST['hcelkem'])? ($_POST['hcelkem']):0;
	$hsplatka = isset($_POST['hsplatka'])? ($_POST['hsplatka']):0;
	

	


}


?>
</html>