<?php include "php/read.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Create</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container">
		<div class="box">
			<h4 class="text-center">Read</h4><br>
			<?php if (isset($_GET['success'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['success']; ?>
				</div>
			<?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table">
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
						<?php
						$i = 0;
						while ($rows = mysqli_fetch_assoc($result)) {
							$i++;
						?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $rows['name'] ?></td>
								<td><?php echo $rows['email']; ?></td>
								<td><a href="update.php?id=<?= $rows['id'] ?>" class="success">Update</a>
									<a href="delete.php?id=<?= $rows['id'] ?>" class="danger">Delete</a>
								</td>
							</tr>
						<?php } ?>
				</table>
			<?php } ?>
			<div class="link-right">
				<a href="create.php" class="link-primary">Create</a>
			</div>
		</div>
	</div>
</body>

</html>