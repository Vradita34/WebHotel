<?php
session_start();
session_destroy();

//kembali/redirect ke halaman login.php
?> <script>
	alert('Yakin ingin keluar  :(');
	window.location='index.php';
 </script>
<?php
?>