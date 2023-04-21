<!DOCTYPE html>
<html lang="cs">
<link rel="stylesheet" href="styles/style.css">

<head>
	<meta charset="UTF-8" />
	<title>SWA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="includes/footer.js" defer></script>
</head>

<?php
require_once "Models/Database.php";
require_once "Models/Family.php";
include_once "config/init.php";
//error_reporting(0);
$result = $Family->get_all();

?>

<body>;	
	<h1>Rodina projekt</h1>
	<div class="family-list">

		<?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
			<div class="family" data-family-id="<?= $row['ID'] ?>">
				<div>
					<h4><?= $row["name"] ?></h4>
					<p>Příjmy: <?= $row["prijmy"] ?></p>
					<p>Výdaje: <?= $row["vydaje"] ?></p>
					<p>Cashflow: <?= $row["cashflow"] ?></p>
					<p>Dluh: <?= $row["dluh"] ?></p>
				</div>
				<div>
					<button onclick="Edit_family()">Upravit</button>
					<button onclick="Delete_family()">Smazat</button>
				</div>
			</div>
		<?php endwhile ?>
	</div>
	<div class=center>
		<button class="button" onclick=openForm(myForm)>Zapis</button>
	</div>
	<div class="inputbox">
		<div class="column middle">
			<div class="form" id="myForm">
				<form class="table" action="parsers/save.php" method="post">
					<h1 id=zapis>
						Jmeno
					</h1>
					<table>
						<tr>
							<td><input type="text" name="name" required></td>
						</tr>
					</table>
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
					<input type="button" onclick="closeForm()">

				</form>
			</div>
		</div>
	</div>
	
</body>

</html>