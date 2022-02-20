<!DOCTYPE html>
<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/create_update.css">
</head>

<body>
	<div class="container">
		<form action="php/create.php" method="post">

			<h4 class="text-center">Create</h4>
			<hr><br>
			<?php if (isset($_GET['error'])) { ?>
				<div class="alert alert-error" role="alert">
					<?php echo $_GET['error']; ?>
				</div>
			<?php } ?>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="name" class="form-control" id="name" name="name" value="<?php if (isset($_GET['name'])) echo ($_GET['name']); ?>" placeholder="Enter name">
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email'])) echo ($_GET['email']); ?>" placeholder="Enter email">
			</div>

			<button type="submit" class="primary" name="create">Create</button>
			<a href="index.php" class="link-primary">View</a>
		</form>
	</div>
</body>

</html>