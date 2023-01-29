<?php

include ('koneksi.php');

    $username = mysqli_real_escape_string($koneksi,$_POST['username']);
    $password = md5($_POST['password']);
    $user_type = $_POST['user_type'];

    $query = "INSERT INTO user (username, password, user_type) VALUES ('$username','$password','$user_type')";
    $exec = mysqli_query($koneksi,$query);

    if($exec) {
    echo
    "<script> 
      alert('anda berhasil melakukan pendaftaran :D');
      document.location.href = 'index.php';
    </script>
    ";
    } else {
        echo
    "<script> 
      alert('anda gagal melakukan pendaftaran :(');
      document.location.href = 'index.php';
    </script>
    ";
    }


    if (mysqli_num_rows($exec) > 1) {
        // data sudah ada, tidak perlu menambahkan lagi
    } else {
        // data belum ada, lakukan query INSERT atau UPDATE
    }

?>