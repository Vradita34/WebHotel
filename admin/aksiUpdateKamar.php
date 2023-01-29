<?php
session_start();
include '../koneksi.php';

$no_kamar = $_POST['no_kamar'];
$tipe_kamar_id = $_POST['tipe_kamar_id'];

$update = mysqli_query($koneksi, "UPDATE kamar SET no_kamar = '$no_kamar', tipe_kamar_id = '$tipe_kamar_id' WHERE no_kamar = '$no_kamar' ");

if($update) {
    $_SESSION['pesan'] =  '<font color=green>OK, 1 data berhasil diupdate.</font>';
    header("location: data_kamar.php"); // kembali ke halaman tampil
    }else{
    echo "Gagal update data!";
    }


// ver bapak agung
// $no_kamar = $_GET['no_kamar'];
// $query = "SELECT * FROM kamar WHERE no_kamar = '$no_kamar'";
// $exec = mysqli_query($koneksi, $query);
// $getData = mysqli_fetch_assoc($exec);

// if(isset($_POST['update'])) {
//     $no_kamar = $_POST['no_kamar'];
//     $tipe_kamar = $_POST['tipe_kamar'];

//     $query = "UPDATE  kamar
//                         SET no_kamar = '$no_kamar',
//                             tipe_kamar = '$tipe_kamar'
//                             WHERE no_kamar = '$_GET[no_kamar]";
//     $exec = mysqli_query($koneksi, $query);
//     if($exec    ) {
//         header('location: data_kamar.php');
//     }
// }

?>