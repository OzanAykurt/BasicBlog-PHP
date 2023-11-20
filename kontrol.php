<?php 
	session_start();
	$kad =  $_POST["userName"];
	$parola =  md5($_POST["password"]);
	
	// 1. ADIM - Veritabanı bağlantı cümlesi - Connection String
	include "connection.php";
	
	// 2. ADIM - SQL Cümleni Yarat
	$sql = "select * from users where email = '".$kad."' and pass = '".$parola."'";
	
	// 3. ADIM - SQL Cümleni Çalıştır - Execute SQL
	$result = $conn->query($sql);
	
	// 4.ADIM - Dönen Değerleri Kontrol Et
	if($result->num_rows>0){//Bilgiler Doğru
	
		// 5.ADIM - Dönen Verinin Okunması
		$rs = $result->fetch_object();

		$_SESSION["token"] = md5($kad);
		$_SESSION["kad"] = $rs->email;
		$_SESSION["role"] = $rs->role;
		
		if(isset($_POST["hatirla"])){
			setcookie("login",$kad,time() +86400 * 30,"/"); // 30 gün
		}
		header("location:index.php");		
	}else{
		// Kullanıcı adı veya porola hatalı
		header("location:login.php?hata=1");		
	}
?>