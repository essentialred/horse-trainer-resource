<?php
	require('../partials/header.php');
	require('../functions/dbconnect.php');

$id = isset($_GET['id']) ? $_GET['id'] : false;

if ($id) :
	$query = $mysqli->query('SELECT * FROM users
	WHERE `users`.id = "'.$id.'" AND `users`.is_trainer');

	echo $mysqli->error;

	$results = array();

	if (!count($results)) {
		echo 'User id '.$id.' is not a registered trainer.  Please try again.';
	}

	while($row = $query->fetch_assoc()) {


	?>
	<section id="trainer-profile">
		<h1><?=$row[name]?></h1>
		<h2><?=$row[location]?></h2>
	</section>
	<?php 
	} 

	require('../partials/footer.php');

else : ?>

	<p>No Trainer found.</p>
	
<?php endif; ?>
