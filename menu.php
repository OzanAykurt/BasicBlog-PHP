<nav class="nav">
  <a class="nav-link active" aria-current="page" href="#">Yazılar</a>
  <?php
	if($_SESSION["role"]=="superadmin"){
  ?>
  <a class="nav-link" href="users.php">Kullanıcılar</a>			 
  <?php
	}
  ?>
  <a class="nav-link" href="cikisyap.php">Güvenli Çıkış</a>
</nav>		