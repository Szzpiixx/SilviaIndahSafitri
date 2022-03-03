<!DOCTYPE html>
<html>
	<head>
		<title>Silvia Indah Safitri</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="content">
			<header>
				<h1 class="judul">Silvia Indah Safitri</h1>
				<h3 class="deskripsi">This is me!</h3>
			</header>
			<div class="menu">
				<ul>
					<li><a href="index.php?page=home">home</a></li>
					<li><a href="index.php?page=Profile">Profile</a></li>
					<li><a href="index.php?page=tentang">Tentang</a></li>
					<li><a href="index.php?page=kontak">Kontak</a></li>
				</ul>
			</div>
			<div class="badan">
			<?php 
			if(isset($_GET['page'])){
				$page = $_GET['page'];
		
				switch ($page) {
					case 'home':
						include "halaman/home.php";
						break;
					case 'Profile':
						include "halaman/Profile.php";
						break;
					case 'tentang':
						include "halaman/tentang.php";
						break;
					case 'kontak':
						include "halaman/kontak.php";
						break;			
					default:
						echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
						break;
				}
			}else{
				include "halaman/home.php";
			}
		
			?>
			</div>
		</div>
	</body>
</html>
