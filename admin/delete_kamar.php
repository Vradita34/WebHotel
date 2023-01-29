<?php

include('../koneksi.php');

$no = $_GET['no_kamar'];

mysqli_query($koneksi, "DELETE FROM kamar WHERE no_kamar='$no'");

header('location: data_kamar.php');
?>