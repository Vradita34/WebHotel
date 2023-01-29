<?php

include ('../koneksi.php');

    $no_kamar = $_POST['no_kamar'];
    $tipe_kamar_id = $_POST['tipe_kamar_id'];

    $query = "INSERT INTO kamar(no_kamar, tipe_kamar_id) VALUES ('$no_kamar','$tipe_kamar_id')";
    $exec = mysqli_query($koneksi,$query);

    if($exec) {
    echo
    "<script> 
      alert('anda telah menambahkan data kamar baru');
      document.location.href = 'data_kamar.php';
    </script>
    ";
    }


    if (mysqli_num_rows($exec) > 1) {
        // data sudah ada, tidak perlu menambahkan lagi
    } else {
        // data belum ada, lakukan query INSERT atau UPDATE
    }

?>