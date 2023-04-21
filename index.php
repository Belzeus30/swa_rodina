<!DOCTYPE html>
<html lang="cs">


<head>
	<meta charset="UTF-8" />
	<title>SWA</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="includes/footer.js" defer></script>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/index.css">
</head>

<?php
require_once "Models/Database.php";
require_once "Models/Family.php";
include_once "config/init.php";
//error_reporting(0);
$result = $Family->get_all();

?>

<body>
	<div class="main">
		<h1>Rodina projekt</h1>
		<button class="button" onclick=openForm(myForm)>Zapis</button>
		<table class="family-list">
			<thead>
				<th>Název</th>
				<th>Příjmy</th>
				<th>Výdaje</th>
				<th>Zůstatek</th>
				<th>Dluh</th>
			</thead>
			<?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) : ?>
				<tr class="family" data-family-id="<?= $row['ID'] ?>">
						<td><strong><?= $row["name"] ?></strong></td>
						<td><?= $row["prijmy"] ?></td>
						<td><?= $row["vydaje"] ?></td>
						<td><?= $row["cashflow"] ?></td>
						<td><?= $row["dluh"] ?></td>
				</tr>
			<?php endwhile ?>
		</table>
		
	</div>
	<?php include 'includes\input _form.php' ?>

</body>

</html>