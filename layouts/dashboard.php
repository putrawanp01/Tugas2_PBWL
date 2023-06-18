<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TUGAS 2 WEB | Web Lanjutan</title>
	<link rel="shortcut icon" href="<?php echo AST; ?>/img/iconfav.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?php echo AST; ?>/css/style.css">
</head>

<body>

	<aside>

		<header>
			<img src="<?php echo AST; ?>/img/icon.png" class="brand">
			<div class="user">Putrawan-0702203193</div>
		</header>

		<nav>
			<ul>
				<li>
					<a class="aktif"; href="<?php echo URL; ?>/dashboard">Home</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/user">
						<img class="icon" src="<?php echo AST; ?>/img/users.png" alt=""> User
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/golongan">
						<img class="icon" src="<?php echo AST; ?>/img/golongan.png" alt=""> Golongan
					</a>
				</li>
				<li>
					<a href="<?php echo URL; ?>/pelanggan">
						<img class="icon" src="<?php echo AST; ?>/img/pelanggan.png" alt=""> Pelanggan
					</a>
				</li>
				<li>
				<a class="aktif"; href="<?php echo URL; ?>/index">LogOut</a>
				</li>
			</ul>
		</nav>

	</aside>

	<main>
		<article>
			<?php require_once ROOT . "app/views/" . $view . ".php"; ?>
		</article>

		<footer>
			Copyright &copy; 2023. Putrawan &#9989
		</footer>
	</main>

</body>

</html>