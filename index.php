<?php
	session_start();
	
	if(!isset($_SESSION["token"])){
		header("location:login.php");
	}else {
		if($_SESSION["token"]!=md5($_SESSION["kad"])){
			session_destroy();
			header("location:login.php?hata=2");
		}
	}
?>
Merhaba <?php echo $_SESSION["kad"]?>
<br>
<?php
	if(isset($_COOKIE["login"])){
		echo "Cookie ".$_COOKIE["login"];
	}
?>
<br>
Dahshboard <a href="cikisyap.php">Güvenli Çıkış</a>