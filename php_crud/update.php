<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/create_update.css">
</head>

<body>
	<div class="container">
		<form action="php/update.php" method="post">

			<h4 class="text-center">Update</h4>
			<hr><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-error" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="name" class="form-control" id="name" name="name" value="<?= $row['name'] ?>">
			</div>

			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?= $row['email'] ?>">
			</div>
			<input type="text" name="id" value="<?= $row['id'] ?>" hidden>

			<button type="submit" class="primary" name="update">Update</button>
			<a href="index.php" class="link-primary">View</a>
		</form>
	</div>
</body>

</html>