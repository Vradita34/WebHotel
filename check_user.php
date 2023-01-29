<?php
session_start();

//  koneksi database 
include "koneksi.php";

// mengambil data dari from dengan method post

$username = mysqli_real_escape_string($koneksi,$_POST['username']);
$password = md5($_POST['password']);

// mencocokkan data yang didapat dari from dengan data yang ada di database

$query_get_data = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$exec = mysqli_query($koneksi, $query_get_data);
$get_data = mysqli_fetch_array($exec);
$_SESSION['username'] = $get_data['username'];
$user_type = $get_data['user_type'];
$_SESSION['user_type'] = $user_type;

// mulai sesi();
if($user_type == 'tamu') {
    echo
    "<script> 
      alert('Selamat datang tamu  :D');
      document.location.href = 'Tamu/tamu.php';
    </script>
    ";
} elseif( $user_type == 'resepsionis') {
    echo
    "<script> 
      alert('Selamat datang Resepsionis  :D');
      document.location.href = ' Resepsionis/resepsionis.php';
    </script>
    ";
} elseif ($user_type == 'administrator'){
    echo
    "<script> 
      alert('Selamat datang Admin  :D');
      document.location.href = ' admin/admin.php';
    </script>
    ";
} else {
    echo
    "<script> 
      alert('Yahh... ada yang salah :D');
      document.location.href = 'index.php';
    </script>
    ";
} 

?>