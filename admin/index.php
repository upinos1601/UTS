<?php 
include("logincheck.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Administrator - <?=getprofilweb('site_title')?></title>
	<meta name="description" content="<?=getprofilweb('meta_desc')?>">
	<meta name="keywords" content="<?=getprofilweb('meta_key')?>">
	<link rel="stylesheet" type="text/css" href="../assets/style.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>

    <script>
    	$(document).ready(function() {
		  $('.summernote').summernote({

	        tabsize: 2,
	        height: 300
		  });
		});

    </script>

</head>
<body>

<div class="wrap shadow mt10 mb10 border">
	<div class="bg_grey">
		<h3 class="pd10">Welcome to Administrator Page</h3>

		<hr>
		<div class="menu pd10">

			<a href="./">Home</a>
			<a href="?mod=kategori">Kategori</a>
			<a href="?mod=berita">Berita</a>
			<a href="?mod=konfigurasi">Konfigurasi</a>
			<a href="?mod=useradmin">User Admin</a>

			<span class="fr"><a href="?keluar=yes">Log Out</a></span>


		</div>
	


		<div class="clear"></div>
	</div>

	<div class="pd10">
		
		<?php 
		$mod = (isset($_GET['mod']) ? $_GET['mod'] : '');

		switch ($mod) {
			case 'useradmin':
				include("useradmin.php");
				break;
			case 'konfigurasi':
				include("konfigurasi.php");
				break;
			case 'berita':
				include("news.php");
				break;
			case 'kategori':
				include("kategori.php");
				break;
			
			default:
				echo "Selamat Datang ".$_SESSION['loginadminnama']." ";
				break;
		}

		 ?>

	</div>
	

</div>

</body>
</html>