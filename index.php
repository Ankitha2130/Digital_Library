<?php

include 'database_connection.php';

include 'function.php';

?>
<div class="container p-3 mb-4 rounded-3">
	<?php

	include 'header.php';

	?>
	<div class="container-fluid py-5">

		<h1 class="display-5 fw-bold">Digital Library</h1>

		<p class="fs-4">A Library Management System which is used to maintain the records of the library. This Library Management System is done by using PHP script, MySQL Database, Javascript and Bootstrap 5 framework. This is a PHP project on Library Management System.</p>

	</div>

	<div class="row align-items-md-stretch">
		<div class="col-md-2">

			<div class="h-100 p-5 text-white bg-dark rounded-3">

				<h2>Admin</h2>
				<p></p>
				<a href="admin_login.php" class="btn btn-outline-light">Login</a>

			</div>

		</div>


		<div class="col-md-3">

			<div class="h-100 p-5 border bg-light rounded-3">

				<h2>User</h2>

				<p></p>

				<a href="user_login.php" class="btn btn-outline-secondary">Login</a>

				<a href="user_registration.php" class="btn btn-outline-primary">Register</a>
			</div>

		</div>
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<img class="image" src="upload/library_book.jpg" />
		</div>
		<style>
			.container {
				background: linear-gradient(45deg, #d2001a, #7462ff);
			}

			.image {
				height: 200px;
				width: 600px;
			}
		</style>
	</div>
	<?php

	include 'footer.php';

	?>
</div>