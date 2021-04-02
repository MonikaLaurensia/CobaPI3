<?php
require 'functions.php';

$pasien = query("SELECT * FROM pasien");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pasien</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Data Pasien</h1>

<table border="1" cellpadding="10" cellspacing="0">

		<tr>			
			<th>NO_RK</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Age</th>
			<th>NO_HP</th>
			<th>Address</th>
			<th>Poli</th>
			<th>Action</th>
		</tr>

			<?php $i = 'A0001'; ?>
			<?php foreach( $pasien as $row): ?>
			<tr>
				<td><?= $i; ?></td>
				<td><?= $row["name"]; ?></td>
				<td><?= $row["gender"]; ?></td>
				<td><?= $row["age"]; ?></td>
				<td><?= $row["no_hp"]; ?></td>
				<td><?= $row["address"]; ?></td>
				<td><?= $row["poli"]; ?></td>

				<td>
					<a href="">Edit</a>	|
					<a href="">Delete</a>
				</td>
		
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
</html>
