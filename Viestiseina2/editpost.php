<?php
	require('config/config.php');
	require('config/db.php');
	    // Check For Submit
	if(isset($_POST['submit'])){
		// Get form data
		$update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
		$aihe = mysqli_real_escape_string($conn, $_POST['aihe']);
		$viesti = mysqli_real_escape_string($conn, $_POST['viesti']);
		$lahettaja = mysqli_real_escape_string($conn,$_POST['lahettaja']);
		$query = "UPDATE viestit SET 
					aihe = '$aihe',
					lahettaja = '$lahettaja',
					viesti = '$viesti' 
						WHERE id = {$update_id}";
		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
	    // Hakee Id
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	    // Create Query
	$query = 'SELECT * FROM viestit WHERE id = '.$id;
	    // Ottaa Vastauksen
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
		<h1>edit post</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Aihe</label>
				<input type="text" name="aihe" class="form-control" value="<?php echo $post['aihe']; ?>">
			</div>
			<div class="form-group">
				<label>Lahettaja</label>
				<input type="text" name="lahettaja" class="form-control" value="<?php echo $post['lahettaja']; ?>">
			</div>
			<div class="form-group">
				<label>Viesti</label>
				<textarea name="viesti" class="form-control"><?php echo $post['viesti']; ?></textarea>
			</div>
			<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
			<input type="submit" name="submit" value="Lahettaja" class="btn btn-primary">
		</form>
	</div>
<?php include('layout/footer.php'); ?>