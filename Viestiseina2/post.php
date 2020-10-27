<?php
		// post php
	require('config/config.php');
	require('config/db.php');
	    // Check For Submit
	if(isset($_POST['delete'])){
		// Get form data
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
		$query = "DELETE FROM viestit WHERE id = {$delete_id}";
		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
	    // get ID
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	    // Create Query
	$query = 'SELECT * FROM viestit WHERE id = '.$id;
	    // Get Result
	$result = mysqli_query($conn, $query);
	    // Fetch Data
	$post = mysqli_fetch_assoc($result);
	    // Free Result
	mysqli_free_result($result);
	    // Close Connection
	mysqli_close($conn);
?>

	<?php include('layout/header.php'); ?>
		<div class="container">
			<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
			<h1><?php echo $post['aihe']; ?></h1>	
			<small><?php echo $post['viestit']; ?><?php echo $post['lahettäja']; ?></small>
			<p><?php echo $post['viesti']; ?></p>
			<hr>
			<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
				<input type="submit" name="delete" value="Delete" class="btn btn-danger">
			</form>

			<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>" class="btn btn-default">Edit</a>
		</div>
	<?php include('layout/footer.php'); ?>