<?php
	require('config/config.php');
	require('config/db.php');
	// Create Query
	$query = 'SELECT * FROM viestit ORDER BY pvm DESC';
	// Get Result
	$result = mysqli_query($conn, $query);
	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	//var_dump($posts);
	// Free Result
	mysqli_free_result($result);
	// Close Connection
	mysqli_close($conn);
?>

<?php include('inc/header.php'); ?>
	<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post) : ?>
			<div class="well">
				<h3><?php echo $post['aihe']; ?></h3>
				<small>Created on <?php echo $post['pvm']; ?> by <?php echo $post['lähettäjä']; ?></small>
				<p><?php echo $post['viesti']; ?></p>
			</div>
		<?php endforeach;?>
	</div>
<?php include('inc/footer.php');?>