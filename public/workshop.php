<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $_SESSION['username'] ?>'s Workshop</title>
</head>
<body>
	<nav>
		<h1 class="hide">Navigation</h1>
		<ul>
			<li>
				<?php echo $_SESSION['username']; ?>
			</li>
			<li>
				<a href="../includes/sign_out.php">Sign Out</a>
			</li>
		</ul>
	</nav>
	<header>
		<h1><?php echo $_SESSION['username']; ?></h1>
	</header>
	<pre>
		<?php print_r($_SESSION) ?>

	</pre>

</body>
</html>
