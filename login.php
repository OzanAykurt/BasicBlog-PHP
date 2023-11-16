<html>
	<head>
		<title>Giriş Ekranı</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style>
			body{background:#f0f0f0}
			.container{background:#fff;padding:10px;border:1px solid #c0c0c0;border-radius:10px}
		</style>
	</head>
	<body>
		<div class="row  p-2">
			<div class="container col-md-4 mt-5">							
				<form name="loginForm" action="kontrol.php" method="POST">
					<div class="formInputs">
						<?php 
						session_start();
						//echo $_COOKIE["login"]."231232";
						if(isset($_COOKIE["login"])){							
							$_SESSION["token"] = md5($_COOKIE["login"]);
							$_SESSION["kad"] = $_COOKIE["login"];
							header("location:index.php");		

						}
						if(isset($_GET["hata"])){
							if($_GET["hata"]==1){
								echo '<div class="alert alert-danger">Kullanıcı adı veya parola hatalı</div>';
							}
							if($_GET["hata"]==2){
								echo '<div class="alert alert-danger">Yetkisiz kullanıcı</div>';
							}
						}
						?>
						<div class="form-group">
							<label for="userName">Kullancı Adı</label>
							<input type="text" class="form-control" id="userName" name="userName">						
						  </div>
						  <div class="form-group">
							<label for="password">Parola</label>
							<input type="password" class="form-control" id="password" name="password">
						  </div>
						  <div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="hatirla" value="1" name="hatirla">
							<label class="form-check-label" for="hatirla">Beni Hatırla</label>
						  </div>
						  <button type="submit" class="btn btn-danger">Giriş Yap</button>
					</div>
				</form>
			</div>
		</div>
	</body>

</html>