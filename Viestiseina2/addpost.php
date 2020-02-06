<?php
	require('config/config.php');
	require('config/db.php');
		// tarkistaa submitin
	if(isset($_POST['submit'])){
		// ottaa lomakkeen datan
		$aihe = mysqli_real_escape_string($conn, $_POST['aihe']);
		$viesti = mysqli_real_escape_string($conn, $_POST['viesti']);
		$lähettäjä = mysqli_real_escape_string($conn, $_POST['lähettäjä']);
		$query = "INSERT INTO viestit(aihe, lahettaja, viesti) VALUES('$aihe', '$lähettäjä', '$viesti')";
		if(mysqli_query($conn, $query)){
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '. mysqli_error($conn);
		}
	}
?>

<?php include('inc/header.php'); ?>
	<div class="container">
		<h1>Lisää viesti</h1>
		<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
			<div class="form-group">
				<label>Aihe</label>
				<input type="text" name="aihe" class="form-control">
			</div>
			<div class="form-group">
				<label>Lähettäjä</label>
				<input type="text" name="lähettäjä" class="form-control">
			</div>
			<div class="form-group">
				<label>Viesti</label>
				<textarea name="viesti" class="form-control"></textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class="btn btn-primary">
		</form>
	</div>
<?php include('inc/footer.php'); ?>