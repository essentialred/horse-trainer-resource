<?php
	require('../partials/header.php');
	require('../functions/dbconnect.php');

$id = $_SERVER["QUERY_STRING"];

$query = $mysqli->query('SELECT * FROM horses
WHERE `horses`.id ='.$id);

echo $mysqli->error;

$results = array();
while($row = $query->fetch_assoc()) {
?>
<section id="user-profile">
	<h1><?=$row[name]?></h1>
	<h2><?=$row[location]?></h2>
	<ul>
		<li></li>
	</ul>
</section>
<?php 
} 

require('../partials/footer.php');