<?php
	require('../partials/header.php');
	require('../functions/dbconnect.php');

$id = isset($_GET['id']) ? $_GET['id'] : false;

if ($id) :
	$query = $mysqli->query('SELECT * FROM horses
	WHERE `horses`.id = "'.$id.'"');

	echo $mysqli->error;

	$results = array();
	while($row = $query->fetch_assoc()) {
	?>
	<section id="horse-timeline">
		<h1><?=$row[name]?></h1>
		<h2><?=$row[birth_date]?></h2>
		<ul>
			<li>Breed: <?=$row[breed]?></li>
			<li>Registry: <?=$row[registry]?></li>
			<li>Registration Number: <?=$row[registration_number]?></li>
			<li>Microchip Number: <?=$row[microchip]?></li>
			<li>Gender: <?=$row[gender]?></li>
		</ul>
	</section>
	<?php 
	} 

	require('../partials/footer.php');

else : ?>

	<p>No horse found.</p>
	
<?php endif; ?>
