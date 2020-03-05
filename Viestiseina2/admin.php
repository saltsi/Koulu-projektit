<?php
	session_start();

	if (!isset($_SESSION['email'])) {
		header('Location: login.php');
    }

    require('config/config.php');
	require('config/db.php');
	    // Luo id mukaisen jonon
	$query = 'SELECT * FROM viestit ORDER BY id DESC';
	    // Get Result
	$result = mysqli_query($conn, $query);
	    // Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	    // Free Result
	mysqli_free_result($result);
        // Sulkee Yhteyden
	mysqli_close($conn);
?>

<?php include('layout/header.php'); ?>
	<div class="container">
		<h1>Viestit</h1>
		<?php foreach($posts as $post) : ?>
			<div class="well">
				<h3><?php echo $post['aihe']; ?></h3>
				<small><?php echo $post['pvm']; ?><?php echo $post['lähettäjä']; ?></small>
				<p><?php echo $post['viesti']; ?></p>
			   </div>
		<?php endforeach; ?>
	</div>
<?php include('layout/footer.php'); ?>