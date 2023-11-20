<?php
if ($_SESSION["role"]!="superadmin"){
	header("HTTP/1.0 401 Unauthorized");
	echo "<strong>HATA : </strong>Yetkisiz kullanıcı.";
	echo '   <script>window.setTimeout(function(){

        // Move to a new location or you can do something else
        window.location.href = "http://localhost:81/Ders5/sabah/";

    }, 3000);</script>
';
	exit;
}

?>