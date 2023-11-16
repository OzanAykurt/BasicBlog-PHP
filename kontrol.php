<?php 
	session_start();
	$kad =  $_POST["userName"];
	$parola =  $_POST["password"];

	if($kad=="admin" && $parola=="123456"){
		//Bilgiler Doğru
		$_SESSION["token"] = md5($kad);
		$_SESSION["kad"] = $kad;
		if(isset($_POST["hatirla"])){
			setcookie("login",$kad,time() +86400 * 30,"/"); // 30 gün
		}
		header("location:index.php");		
	}else{
		// Kullanıcı adı veya porola hatalı
		header("location:login.php?hata=1");		
	}
?>