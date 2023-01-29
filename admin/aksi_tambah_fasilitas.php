<?php

include ('../koneksi.php');

    $fasilitas_hotel = $_POST['fasilitas_hotel'];
    $fasilitas_umum = $_POST['fasilitas_umum'];
    $fasilitas_terdekat = $_POST['fasilitas_terdekat'];

    $query = "INSERT INTO fasilitas_hotel(fasilitas_hotel, fasilitas_umum, fasilitas_terdekat ) VALUES ('$fasilitas_hotel','$fasilitas_umum','$fasilitas_terdekat')";
    $exec = mysqli_query($koneksi,$query);

    if($exec) {
    echo "<script>alert
        ('Anda telah berhasil menambahkan data fasilitas baru')</script>";
    echo '<script>window.location="data_fasilitas.php"</script>';
    }

    if (mysqli_num_rows($exec) > 1) {
        // data sudah ada, tidak perlu menambahkan lagi
    } else {
        // data belum ada, lakukan query INSERT atau UPDATE
    }

?>