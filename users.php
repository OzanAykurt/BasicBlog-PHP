<html>
	<head>
		<title>kullanıcılar Ekranı</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
			body{background:#f0f0f0}
			.container{background:#fff;padding:10px;border:1px solid #c0c0c0;border-radius:10px}
		</style>
	</head>
	<body>
<?php
	session_start();
	include "yetki_kontrol.php";
	
	
	if(!isset($_SESSION["token"])){
		header("location:login.php");
	}else {
		if($_SESSION["token"]!=md5($_SESSION["kad"])){
			session_destroy();
			header("location:login.php?hata=2");
		}
	}
?>
	<div class="row">
		<div class="col-md-10" style="margin:0 auto">
			<?php
			include "menu.php";
			?>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-10" style="margin:0 auto">
			kullanıcılar bu alanda olacak
		</div>
	</div>


	</body>
</html>