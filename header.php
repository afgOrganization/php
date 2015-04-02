<!doctype html>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
	<body>
		<div class="mainWrap">

			<header>
				<h1>Logo</h1>
			</header>

			<nav>
				<ul>
					<a href="index.php">
						<li class="<?php if($pageTitle == 'Home') { ?> currentPage <?php } ?>">Home</li>
					</a>
					<a href="contact.php">
						<li class="<?php if($pageTitle == 'Contact') { ?> currentPage <?php } ?>">Contact</li>
					</a>
				</ul>
			</nav>
			<br />

