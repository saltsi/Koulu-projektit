<?php
	session_start();

	if (!isset($_SESSION['email'])) {
		header('Location: login.php');
    }

    require('config/config.php');
	require('config/db.php');
	    // Luo id mukaisen jonon
	$query = 'SELECT * FROM viestit ORDER BY id DESC';
	    // Hakee queryn
	$result = mysqli_query($conn, $query);
	    // Hakee datan
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	    // Antaa vastauksen
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
				<small><?php echo $post['pvm']; ?><?php echo $post['lahettaja']; ?></small>
				<p><?php echo $post['viesti']; ?></p>
        		<a href="<?php echo ROOT_URL; ?>editpost.php?id=">Kirjaudu</a>
				
			</div>
		<?php endforeach; ?>
	</div>
<?php include('layout/footer.php'); ?>